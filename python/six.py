import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="jobanputra"
)

mycursor = mydb.cursor()

sql = "DELETE FROM `m1` WHERE id=4"

mycursor.execute(sql)

mydb.commit()

print(mycursor.rowcount, "record(s) deleted")
