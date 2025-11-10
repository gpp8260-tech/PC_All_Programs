name = input("Enter your Name:- ")
city = input("Enter your city:- ")

class Demo:
    def __init__(self, name, city):
        self.name = name
        self.city = city

obj = Demo(name, city)
print(obj.name, obj.city)
