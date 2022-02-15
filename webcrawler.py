import requests, time
from requests.exceptions import Timeout
from requests.exceptions import ConnectionError
import json
import mysql.connector

arr = ['a', 'b', 'c', "d", "e", "f", "g", "h", "i", "J", "K", "L", "M", "N", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]




import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="search_engine"
)

mycursor = mydb.cursor()

mycursor.execute("select count(*) from websites")
result = mycursor.fetchone()

def insertwebsite(website,views):
  sql = "INSERT INTO websites (website, views) VALUES (%s, %s)"
  val = (website, views)
  mycursor.execute(sql, val)

  mydb.commit()









X = 35
endings = [".co.uk",".com"]
#x = requests.get('https://w3schools.com/python/demopage.htm')

for x in endings:
  print(x)





def differentFlagPermutations(X, arr):
 
    ml = arr.copy()
 

    count = len(ml)
 

    for z in range(X-1):
         

        tmp = []
         

        
        for i in arr:
      
            for k in ml:
               
                if i not in k:

                    tmp.append(k + i)
                    count += 1
               
                    for x in endings:
                        #time.sleep(1)
                        tockeck = ("http://" + k + i + x)
                        try:
                            response = requests.get(tockeck, timeout=1)
                        except ConnectionError as ce:
                            print(ce)
                        except Timeout:
                            print('The request timed out')
                        else:
                            url555 = 'http://192.168.1.84:7000/ranking'
                            myobj = {'site': k + i + x}

                            x123 = requests.post(url555, data = myobj)
                            print(x123.text)
                            insertwebsite(tockeck,x123.text)
                            for x in response.text.split():
                              #print(x)
                              sql = "INSERT INTO words (word, website) VALUES (%s, %s)"
                              val = (x, tockeck)
                              mycursor.execute(sql, val)

                              mydb.commit()
                        
                           

                     

        ml = tmp
 
 


 


 
differentFlagPermutations(X, arr)
