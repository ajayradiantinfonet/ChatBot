from django.shortcuts import render,redirect
from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt
from .models import Bot  
from django.contrib.auth.models import auth,User
from django.contrib.auth.decorators import login_required
from django.contrib import messages
import json
import random
import pickle
import numpy as np
import nltk
from nltk.stem import WordNetLemmatizer
import pandas as pd
from tensorflow.keras.models import load_model

lemmatizer = WordNetLemmatizer()
intents = json.loads(open('basic/intents.json').read())
words = pickle.load(open('basic/words.pkl','rb'))
classes = pickle.load(open('basic/classes.pkl','rb'))
model = load_model('basic/chatbot_model.h5')


def clean_up_sentence(sentence):
    sentence_words = nltk.word_tokenize(sentence)
    sentence_words = [lemmatizer.lemmatize(word.lower()) for word in sentence_words]
    return sentence_words

def bow(sentence, words, show_details=True):
    sentence_words = clean_up_sentence(sentence)
    bag = [0]*len(words) 
    for s in sentence_words:
        for i,w in enumerate(words):
            if w == s: 
                
                bag[i] = 1
                if show_details:
                    print ("found in bag: %s" % w)
    return(np.array(bag))    


def predict_class(sentence, model):
    p = bow(sentence, words,show_details=False)
    res = model.predict(np.array([p]))[0]
    ERROR_THRESHOLD = 0.25
    results = [[i,r] for i,r in enumerate(res) if r>ERROR_THRESHOLD]
    results.sort(key=lambda x: x[1], reverse=True)
    return_list = []
    for r in results:
        return_list.append({"intent": classes[r[0]], "probability": str(r[1])})
    return return_list    


def getResponse(intents_list, intents_json):
    tag = intents_list[0]['intent']
    list_of_intents = intents_json['intents']
    for i in list_of_intents:
        if(i['tag']== tag):
            result = random.choice(i['responses'])
            break
    return result




def signup(request):
    if request.method =="POST":
        first_name = request.POST.get('first_name')
        last_name = request.POST.get('last_name')
        username = request.POST.get('username')
        email = request.POST.get('email')
        password1 =request.POST.get('password1')
        password2 = request.POST.get('password2')
        if password1==password2:
            user = User.objects.create_user(first_name = first_name,last_name=last_name,username=username,email=email,password=password1)
            user.save()
            messages.info(request,'user is created')
        else:
            messages.info(request,'password is not maching....')
            return redirect('/signup')

        return redirect("/login")
    return render(request,'signup.html')  



def login(request):
    if request.method == "POST":
        username = request.POST['username']
        password = request.POST['password']
        user = auth.authenticate(request, username=username,password = password)
        if user is not None:
            auth.login(request, user)
            return redirect('/home')
        else:
            messages.info(request,'creadinatial is not')
            return redirect('login')            
    return render(request,'login.html')

def logout(request):
    auth.logout(request)
    return redirect('/')    

@csrf_exempt
@login_required
def home(request):
    if request.method=="GET":
        return render(request,"index.html")
    if request.method =='POST':
        mess = request.POST.get('message')
        intents_list =predict_class(mess,model)
        res = getResponse(intents_list,intents)
        chat = Bot(question=mess,answers=res)
        chat.save()    
        # data = Bot.objects.filter(user=request.user)
        # print(data)
        data = Bot.objects.all()
        return render(request,"index.html",{'res':res,'mess':mess,'data':data})
      