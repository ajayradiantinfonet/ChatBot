
 



 
<html>
<head>
    <title>Radiant chatbot </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>


<body>



    <button class="open-button" id="openchatbot" onclick="openForm()">ChatBot</button>
    <div class="chat-popup" id="myForm">
        <div class="wrapper " class="message">
            <div class="chat-box" class="message">
                <div class="chat-head">
                    <h2>RadiantBot</h2>
                    <img src="https://www.radiantinfonet.com/images/radiant_img/Radiant-Logo-New.png"     width="80" ,height="50">
                </div>
            <div class="chat-body" id='chat-body' class="messgae">
                <div id="chatbodyscollor"> 
                    <div class="msg-insert">
                    <div class="small"><small></small> </div>
                    </div>
               </div>
                    <div class="chat-text">
                         <input type="textarea" placeholder="send message" id="message" name="message"> 
                        <button  id="button" input="submit" class="btn btn-success send">send</button>
                        <button  type="button" id="ajay" class="btn-cancel" onclick="closeForm()">Close</button>
                    </div>
                </div>
               
             

               
                <style>
                    .msg-send img {
                        border-radius: 20px;
                        margin-right: 4px;
                        cursor: pointer;
                    }
                    
                    .small {
                        color: black;
                        margin-left: 130px;
                    }
                    
                    .open-button {
                        background-color: green;
                        color: white;
                        padding: 16px 20px;
                        border: none;
                        cursor: pointer;
                        opacity: 0.8;
                        position: fixed;
                        bottom: 23px;
                        right: 28px;
                        width: 280px;
                    }
                    
                    .btn-cancel {
                        background-color: green;
                        color: white;
                        padding: 16px 20px;
                        border: none;
                        cursor: pointer;
                        position: fixed;
                        bottom: 23px;
                        right: 28px;
                        width: 301px;
                    }
                    
                    * {
                        padding: 0px;
                        margin: 0px;
                        font-family: 'Fira Code';
                    }
                    
                    body {
                        height: 100%;
                        background: #95a5a6;
                    }
                    
                    .chat-box {
                        right: 29px;
                        position: absolute;
                        bottom: 0px;
                        background: white;
                        width: 300px;
                        border-radius: 5px 5px 0px 0px;
                        margin-bottom: 80px;
                    }
                    
                    .chat-head {
                        width: inherit;
                        height: 45px;
                        background: #C0C0C0;
                        border-radius: 5px 5px 0px 0px;
                    }
                    
                    .chat-head h2 {
                        color: black;
                        padding: 8px;
                        display: inline-block;
                    }
                    
                    .chat-head img {
                        cursor: pointer;

                        float: right;
                        width: 90px;
                        margin: 10px;
                    }
                    
                    .chat-body {
                        height: 355px;
                        width: inherit;
                        overflow: auto;
                        margin-bottom: 45px;
                        background-color: FFFFFF;
                    }
                    
                    .chat-text {
                        position: fixed;
                        bottom: 0px;
                        height: 45px;
                        width: inherit;
                        margin-bottom: 82px;
                        margin-left: 22px;
                    }
                    
                    .chat-text textarea {
                        width: inherit;
                        height: inherit;
                        box-sizing: border-box;
                        border: 2px solid #bdc3c7;
                        padding: 10px;
                        resize: none;
                    }
                    
                    .chat-text textarea:active,
                    .chat-text textarea:focus,
                    .chat-text textarea:hover {
                        border-color: royalblue;
                    }
                    
                    .msg-send {
                        background: #2ecc71;
                    }
                    
                    .msg-receive {
                        background: #3498db;
                    }
                    
                    .msg-send {
                        width: 200px;
                        height: 35px;
                        padding: 5px 5px 5px 10px;
                        margin-left: 16px;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        line-height: 30px;
                        border-radius: 20px;
                        color: white;
                    }
                    
                    .msg-receive {
                        width: 200px;
                        margin-top: 10px;
                        margin-bottom: 1px;
                        height: 70px;
                        padding: 5px 5px 5px 10px;
                        margin-left: 71px;
                        border-radius: 23px;
                        line-height: 15px;
                        color: white;
                    }
                    
                    .msg-receive:hover,
                    .msg-send:hover {
                        opacity: .9;
                    }
                </style>
            </div>
        </div>
    
                
    </div>
</body>

</html>










<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>


 <center><h3>Demo chatbot</h3></center>
 <hr>
<!-- 
  <input type="textarea" placeholder="username" id="username" name="username"> 
 <input type="textarea" placeholder="password" id="password" name="password"> 
<button  id="button" input="submit" class="btn btn-success sendd">send</button>   -->







<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script>
$('.send').click(function(){

var val1 = $('#message').val();

var div = document.createElement('div');
let image = document.createElement('img');
div.classList.add('msg-send');
image.src = src="https://media.istockphoto.com/photos/businessman-silhouette-as-avatar-or-default-profile-picture-picture-id476085198?b=1&k=6&m=476085198&s=170667a&w=0&h=ZHUgkr2TYixVu_Nny3XpsfmTdInPtEp1-PpO9MuQwYM="; 
image.width = 40; 
image.height = 40; 
let message = document.createTextNode(val1);
div.appendChild(image);
div.appendChild(message);

let chatBodyScroller = document.getElementById('chatbodyscollor');
chatBodyScroller.appendChild(div);

$.ajax({
type: 'post',
url: 'http://127.0.0.1:8000/home/',
data: { 'message': val1 },
success: function(response) {

//alert(response);
console.log('response',response);
var div = document.createElement('div');
div.classList.add('msg-receive');
let message = document.createTextNode(response);
div.appendChild(message);

let chatBodyScroller = document.getElementById('chatbodyscollor');
let chatBody = document.getElementById('chat-body');
chatBodyScroller.appendChild(div);
console.log('scroll height',chatBodyScroller.getBoundingClientRect().height)
chatBody.scrollTo(0,chatBodyScroller.getBoundingClientRect().height)

}
});

});
</script>


<!-- <script>    
$('.sendd').click(function(){

var val11 = $('#username').val();
var val12 = $('#password').val();
$.ajax({
type: 'post',
url: 'http://127.0.0.1:8000/login/',

data: {'username': val11,'password':val12},
success: function(response) {

alert(response);

}
});
});

</script>   -->