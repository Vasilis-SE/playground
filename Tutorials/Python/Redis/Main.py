import redis
import string
import random
import json

r = redis.Redis('localhost')

def UserIDGenerator(length=8, accepted=string.ascii_uppercase + string.digits):
    loopGeneration = True
    randomID = ""
    while loopGeneration:
        randomID = ''.join(random.choice(accepted) for _ in range(length))
        if r.exists(randomID) == 0:
            loopGeneration = False

    return randomID

def AddNewUserIntoRedis():
    menuLoop = True

    while menuLoop:
        fname = input("Type the first name of the user: ")
        lname = input("Type the last name of the user: ")
        balance = float(input("Type the account balance of the user: "))
        country = input("Type the country of the user: ")

        if fname != "" and lname != "" and balance != "" and country != "":
            userID = UserIDGenerator()
            r.hset("USERS:"+userID, "fname", fname)
            r.hset("USERS:"+userID, "lname", lname)
            r.hset("USERS:"+userID, "balance", balance)
            r.hset("USERS:"+userID, "country", country)
            menuLoop = False

def RetrieveAllUsers():
    listOfUserIDs = r.keys("USERS:*")

    for x in listOfUserIDs:
        user = r.hgetall(x)

        print("\t First Name: ", user[b"fname"].decode("utf-8"))
        print("\t Last Name: ", user[b"lname"].decode("utf-8"))
        print("\t Account Balance: ", user[b"balance"].decode("utf-8"))
        print("\t Country: ", user[b"country"].decode("utf-8"))
        print("\t ----------")

menuLoop = True
while menuLoop:
    print("================================")
    print("\t 1. Add New User")
    print("\t 2. View All Users")
    print("\t 3. Exit")
    print("================================")
    selection = int(input())

    if selection == 1:
        AddNewUserIntoRedis()
    if selection == 2:
        RetrieveAllUsers()
    elif selection == 3:
        menuLoop = False