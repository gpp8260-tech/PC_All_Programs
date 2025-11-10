import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="jobanputra"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT name,city FROM m1")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)