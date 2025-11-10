hunday={
    "Brand":"Creta",
    "Model":"Top",
    "color":"Black"
}
audi={
    "Brand":"Audi",
    "Model":"Classes top",
    "Color":"Red",
}
Bmw={
     "Brand":"BMW",
     "Model":"BMW R",   
     "Color":"White"
}

cars={
   "hunday":hunday,
    "audi":audi,
    "Bmw":Bmw
    
}


for i in  cars:
    print(cars[i])

print(cars)
print(cars["audi"]["Model"])
