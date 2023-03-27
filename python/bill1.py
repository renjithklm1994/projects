
print("Welcome")
print("The products are")
products=[( 1,'Ponni Rice',64),
( 2,'Sugar',80),(3,'Tea',90),(4,'apple',100),(5,'orange',110)]
headers=['id','Name','price']
bill=[]
def get_item_unit_price(product_id):

    product_price=None
    for product in products:

        
        if(product_id==product[0]):


            product_price=product[2]
            break
    return product_price
print("Do you want to display Item ?")
x=int(input("1- For Yes 0- For No"))
if(x==1):
    





    for header in headers:


        print ('{:<20}'.format(header),end='')
    print()#new line character
    for product in products:




        print('{:<20}'.format(product[0]),end='')
        print('{:<20}'.format(product[1]),end='')
        print('{:<20}'.format(product[2]),end='')
        print()#output each data
while x==1:

    name=input("Enter customer name  ")
    num=int(input("Enter phone number  "))
    print("Do you want to add Item to Bill?")
    y=int(input("1- For Yes 0- For No"))
    if(y==1):

        product_id=int(input("Enter product_id"))
        qty=int(input("Enter quantity"))
        unit_price= get_item_unit_price(product_id)
    
        price=qty*unit_price
        GST=price*(12/100)
        Net_price=price-GST
        
        details=[name,num,product_id,qty,price,GST,Net_price]

        bill.append(details)
        print("Do you want to add another item ?")
        x=int(input('(1- For yes,0- For No)'))
        if(x==0):



            headers=['Name','Num','Id','Qty','price','GST','Net-price']
            for header in headers:

                print ('{:<20}'.format(header),end='')
            print()
            for item in bill:




                print ('{:<20}'.format(item[0]),end='')
                print ('{:<20}'.format(item[1]),end='')
                print ('{:<20}'.format(item[2]),end='')
                print ('{:<20}'.format(item[3]),end='')
                print ('{:<20}'.format(item[4]),end='')
                print ('{:<20}'.format(item[5]),end='')
                print ('{:<20}'.format(item[6]),end='')
                print()




 
        

  
