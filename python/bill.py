#x=int(input("Enter a number"))
y=['apple','orange','mango','pineapple'] #list
z=('a','b','c','d')#tuple
products=[(1,'Ponni Rice',64),(2,'Sugar',80),(3,'Tea',90)]
bill=[]
def get_item_unit_price(item_id):
    item_price=None
    for item in products:
        if(item_id==item[0]):
            item_price=item[2]
            break
    return item_price
x=0
cnt=1
while x==0:
    for item in products:
            print(item[0]," ",item[1]," ",item[2])
    print("Do you want to add Item to Bill?")
    y=int(input("1- For Yes 2- For No"))
    if(y==1):
        itemId=int(input("Enter Item Id"))
        qty=int(input("Enter Qty"))
        unitprice=get_item_unit_price(itemId)
        price=unitprice*qty
        t1=(cnt,itemId,qty,unitprice,price)
        bill.append(t1)
        cnt=cnt+1
    print("Do you want to continue?")
    x=int(input("0- For yes,1- For No"))
print(bill)





