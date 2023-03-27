from django.http import HttpResponse

from django.shortcuts import render

def index(request):
    return HttpResponse("Hello, world ")
def home(request):
    
    context = {'title': 'Portfolio','name':'Renjith','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':''}
    return render(request, 'index.html', context)