from django.shortcuts import render

def index(request):
    
    context = {'title': 'Portfolio','name':'Renjith','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':'','':''}
    return render(request, 'index1.html', context)
# Create your views here.
