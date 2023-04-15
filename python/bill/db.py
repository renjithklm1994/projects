import mysql.connector
mydb=mysql.connector.connect(host='localhost',
                        database='list',
                        user='root',
                        password='')
print("The products are")
mycursor1= mydb.cursor()
mycursor1.execute("show columns from produict")
myresult1 = mycursor1.fetchall()
mydb.commit()
bill=[]
def get_item_unit_price(product_id):


    product_price=int
    for  x in myresult:


        
        if(product_id==x[0]):



            product_price=x[2]
            break
    return product_price
print("Do you want to display Item ?")
x=int(input("1- For Yes 0- For No"))
if(x==1):

    
    for head in myresult1:
        print ('{:<20}'.format(head[0]),end='')
    print()
    mycursor= mydb.cursor()
    mycursor.execute("SELECT * FROM produict")
    myresult = mycursor.fetchall()

    for p in myresult:




        print('{:<20}'.format(p[0]),end='')
        print('{:<20}'.format(p[1]),end='')
        print('{:<20}'.format(p[2]),end='')
        print()

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
        mycursor2= mydb.cursor()
        sql="insert into customers(customer_name,Mobile_no,product_id,Qty,Price,Gst,Net_price)values(%s,%s,%s,%s,%s,%s,%s)"
        val=[name,num,product_id,qty,price,GST,Net_price]
        mycursor2.execute(sql,val)
        
        myresult2 = mycursor2.fetchall()

        mydb.commit()
        mycursor3= mydb.cursor()
        mycursor3.execute("SELECT * FROM customers")
        myresult3 = mycursor3.fetchall()
        print("Do you want to add another item ?")
        x=int(input('(1- For yes,0- For No)'))
        if(x==0):

            print("Bill Details ")
            mycursor4= mydb.cursor()
            mycursor4.execute("show columns from customers")
            myresult4 = mycursor4.fetchall()
            for head in myresult4:



                print ('{:<20}'.format(head[0]),end='')
            print()


            for item in myresult3:




                print ('{:<20}'.format(item[0]),end='')
                print ('{:<20}'.format(item[1]),end='')
                print ('{:<20}'.format(item[2]),end='')
                print ('{:<20}'.format(item[3]),end='')
                print ('{:<20}'.format(item[4]),end='')
                print ('{:<20}'.format(item[5]),end='')
                print ('{:<20}'.format(item[6]),end='')
                print()
