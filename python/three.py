import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="jobanputra"
)

mycursor = mydb.cursor()

sql = "INSERT INTO m1 (name, city, address) VALUES (%s, %s, %s)"
val = ("Samir", "Rajkot", "Geet")

mycursor.execute(sql, val)
mydb.commit()

print(mycursor.rowcount, "record inserted.")
