# Generated by Django 3.1.6 on 2021-02-25 05:10

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('bott', '0009_bot'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='bot',
            name='user',
        ),
    ]