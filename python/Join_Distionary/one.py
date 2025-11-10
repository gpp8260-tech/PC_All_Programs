list_one=[3,4,1,5,7];
list_two=[11,22,33,44,55];

list_three=list_one+list_two;
print(list_three)

color_one=("Red","Green","Orange")
color_two=("Blue","White","Pink")
color=color_one+color_two
print(color)

cars_one={"Crete","BMW","Audi"}
cars_two={"Aulto","I10","I20","Ecco"}
cars_num={44,11,12,77}
cars_numtwo={'R','A','J','K','O','T'}
cars=cars_one.union(cars_two,cars_num,cars_numtwo)
#cars =cars_one |cars_two
print(cars)


'''
for x in list_two:
    list_one.append(x)
print(list_one)

list_three=list_one+list_two;
print(list_three)
'''