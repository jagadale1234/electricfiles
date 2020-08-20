# -*- coding: utf-8 -*-
"""DailyData.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1qaWkJD6SswVAWT4ToDX8aWjRVo4CCPX4
"""

import numpy as np
import pandas as pd
import time
import mysql.connector

df = pd.read_csv('data.csv')
df = df[['timestamp','AC']]
df[['Date','Time']] = df.timestamp.str.split(" ",expand=True,)
df = df.drop("timestamp",axis = 1)
df[['Year','Month','Date']] = df.Date.str.split("-",expand=True)
df = df[['Year','Month','Date','Time','AC']]

lt = time.localtime()

if lt[1] > 9:
  mon = str(lt[1])
else:
  mon = '0'+str(lt[1])

if lt[2] > 9:
  dt = str(lt[2])
else:
  dt = '0'+str(lt[2]) 

if lt[3] > 9:
  tm = str(lt[3])+':00:00'
else:
  tm = '0'+str(lt[3])+':00:00'


mdata = df.loc[df['Month'] == mon]
ddata = mdata.loc[mdata['Date'] = dt]

usage = ddata['AC'].sum()

mydb = mysql.connector.connect(
  host="localhost",
  user=" 	id14614857_root1",
  password="v^vn*8?6nB)HKQU(",
  database="id14614857_daily"
)

mycursor = mydb.cursor()

sql = "INSERT INTO dailyupdates (units) VALUES (%d)"
val = ("usage")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")