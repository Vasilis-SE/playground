from DBConnector import ConnectToPythonTestDB

def RegisterNewUser():
    connection = ConnectToPythonTestDB()
    cursor = connection.cursor()

    processFlag = False

    while not processFlag:
        fname = input("Enter the first name: ")
        lname = input("Enter the last name: ")
        balance = float(input("Enter the users balance: "))

        if fname != "" and lname != "" and balance != "":
            param = (fname, lname, balance)
            cursor.execute("INSERT INTO users (fname, lname, balance) VALUES (%s,%s,%s)", param)
            connection.commit()
            processFlag = True

def RetrieveAllUsers():
    connection = ConnectToPythonTestDB()
    cursor = connection.cursor()

    cursor.execute("SELECT * FROM users")
    users = cursor.fetchall()

    print("###################################")
    for user in users:
        print("\t First Name: ", user[1])
        print("\t Last Name: ", user[2])
        print("\t Balance: ", user[3])
        print("------------")
    print("###################################")

menuLoop = True
while menuLoop:
    print("==================================")
    print("\t 1. Register a new user.")
    print("\t 2. Display users.")
    print("\t 3. Exit.")
    print("==================================")
    selection = int(input())

    if selection == 1:
        RegisterNewUser()
    elif selection == 2:
        RetrieveAllUsers()