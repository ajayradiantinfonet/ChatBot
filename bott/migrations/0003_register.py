# Generated by Django 3.1.6 on 2021-02-23 05:37

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('bott', '0002_auto_20210223_0519'),
    ]

    operations = [
        migrations.CreateModel(
            name='register',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=50)),
                ('email', models.EmailField(max_length=254)),
            ],
        ),
    ]