info={
    "Name":"Ridham",
    "City":"Ahmedabad",
    "State":"Gujarat",
    "Email":"ridham@gmail.com"
}

for i in info:
    print(info[i])
'''
del info["State"]
print(info)
info.pop("City")
print(info)


info["State"]="Maharastra"
print(info)
info.update({"Email":"Ridhampatel@gmail.com"})
print(info)
if "Cityyy" in info:
    print("Yes, 'City' is one of the keys in the thisdict dictionary")
else:
    print("No, 'City' is one of the keys in the thisdict dictionary")    
    print("")   
newname = info["Name"]
print(info)
info["Contact"]="9876543210"
info["age"]="26"
print(info)
x=info.values()
print(x)
print("")

info["Name"]="Meet"
print(info)
print(newname)
print(info["City"])
print(info["Email"])
'''