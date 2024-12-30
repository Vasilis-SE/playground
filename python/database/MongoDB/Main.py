import json
from MongoDBConnector import ConnectToUsersCollection

def AddNewUserIntoMongoDB():
    menuLoop = True

    while menuLoop:
        fname = input("Type the first name of the user: ")
        lname = input("Type the last name of the user: ")
        balance = float(input("Type the account balance of the user: "))
        country = input("Type the country of the user: ")

        if fname != "" and lname != "" and balance != "" and country != "":
            userDictionary = {"fname": fname,"lname": lname,"balance": balance,"country": country}
            usersCollection = ConnectToUsersCollection()
            usersCollection.insert_one( userDictionary )
            menuLoop = False

def RetrieveAllUsers():
    usersCollection = ConnectToUsersCollection()

    for user in usersCollection.find():
        print("\t First Name: ", user["fname"])
        print("\t Last Name: ", user["lname"])
        print("\t Account Balance: ", user["balance"])
        print("\t Country: ", user["country"])
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
        AddNewUserIntoMongoDB()
    if selection == 2:
        RetrieveAllUsers()
    elif selection == 3:
        menuLoop = False