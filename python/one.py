import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="jobanputra"
)

mycursor = mydb.cursor()

sql = "INSERT INTO customers (name, city,address) VALUES (%s, %s,%s)"
val = ("John", "Highway", "Rajkot")

mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")
