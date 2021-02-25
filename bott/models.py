from django.db import models
from django.contrib.auth.models import User

class Bot(models.Model):
    # user = models.ForeignKey(User, related_name='user', on_delete=models.CASCADE)
    question = models.CharField(max_length=333)
    answers = models.CharField(max_length=333)
    def __str__(self):
        return self.question
    
    
