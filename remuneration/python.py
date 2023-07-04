#!C:/Users/ASUS/AppData/Local/Programs/Python/Python310/python.exe

print("heading")

import mysql.connector

# create connection object
con = mysql.connector.connect(
  host="localhost", user="root",
  password="amira", database="sps")

print(con)
  
