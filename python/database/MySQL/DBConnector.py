import mysql.connector

def ConnectToPythonTestDB():
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="",
        db="pythontest"
    )

    return mydb