import transportation_means
transMeansObj = transportation_means.Means()

def DisplayMainMenu():
    loopMenu = True
    while loopMenu:
        print("==================================")
        print("Select one of the following: ")
        print("\t 1. Display Available Transportation Modes")
        print("\t 2. Register New Transportation Mode")
        print("\t 3. Delete Transportation Mode")
        print("\t 4. Display Available Transportation Means")
        print("\t 5. Register New Transportation Means")
        print("\t 6. Delete Transportation Means")
        print("\t 7. Exit")
        print("==================================")
        selection = int(input(""))

        if selection >= 1 and selection <=6:
            MenuSelectionProcess(selection)
        elif selection != 7:
            print("Wrong input!")
        else:
            print("Good Bye!")
            loopMenu = False
    return 0

def MenuSelectionProcess(selection):
    if selection == 1:
        DisplayAvailableTransportationModes()
    elif selection == 2:
        RegisterNewTransportationMode()
    elif selection == 3:
        DeleteTransportationMode()
    elif selection == 4:
        DisplayAvailableTransportationMeans()
    elif selection == 5:
        RegisterNewTrasportationMeans()
    elif selection == 6:
        DeleteTransportationMeans()
    else:
        return 0

def DisplayAvailableTransportationModes():
    allModes = transMeansObj.RetrieveAvailableModes()

    print("-------------------")
    print("Modes:")
    for mode in allModes:
        print("\t > " + mode["NAME"])
    print("-------------------")
    input("")

def RegisterNewTransportationMode():
    if transMeansObj.NewModeForm():
        transMeansObj.AddNewModeIntoDatabase()
        print("The new mode was successfully added!")
        input("")

def DeleteTransportationMode():
    loopConf = True
    selectedModeObj = transMeansObj.DisplayModesMenu()

    while loopConf:
        confirmation = input("Do you really want to delete this mode (yes/no) ?")
        if confirmation.lower() == "yes":
            loopConf = False
        elif confirmation.lower() == "no":
            loopConf = False
            return 0
        else:
            print("Wrong input given!")

    loopConf = True
    while loopConf:
        confirmation = input("Do you want to delete this mode`s registered means (yes/no) ?")
        if confirmation.lower() == "yes" or confirmation.lower() == "no":
            loopConf = False
        else:
            print("Wrong input given!")

    if transMeansObj.DeleteModeFromDatabase({"_id": selectedModeObj["ID"]}):
        if confirmation == "yes":
            if transMeansObj.DeleteTransportationMeans({"modeid": selectedModeObj["ID"]}):
                print("The deletion of the mode and its means was successful!")
            else:
                print("An error occurred while trying to delete means from database!")
        else:
            print("The deletion of the mode was successful")
    else:
        print("An error occurred while trying to delete mode from database!")

    input("")

def DisplayAvailableTransportationMeans():
    availableMeans = transMeansObj.RetrieveAvailableMeans()
    print("------------------")
    print("Available Means: ")
    for mean in availableMeans:
        if mean["IS_FORPASS"]:
            passengersMsg = "Yes"
        else:
            passengersMsg = "No"

        if mean["IS_FORFREI"]:
            cargoMessage = "Yes"
        else:
            cargoMessage = "No"

        print("\t > Means Name: " + mean["NAME"])
        print("\t   Means ID: " + str(mean["ID"]))
        print("\t   Is it for passengers?: " + passengersMsg)
        print("\t   Is it for cargo?: " + cargoMessage)
    print("------------------")
    input("")

def RegisterNewTrasportationMeans():
    if transMeansObj.NewTransportationMeansForm():
        transMeansObj.AddNewTransportationMeans()
        print("The means was successfully registered!")
    input("")

def DeleteTransportationMeans():
    loopConf = True
    selectedMeansObj = transMeansObj.DisplayMeansMenu()

    while loopConf:
        confirmation = input("Do you really want to delete " + selectedMeansObj["NAME"] + " means from the database (yes/no) ? ")
        if confirmation.lower() == "yes":
            if transMeansObj.DeleteTransportationMeans({"_id": selectedMeansObj["ID"]}):
                print("The means was successfully deleted!")
            else:
                print("There was an error while trying to delete the means!")
            loopConf = False
        elif confirmation.lower() == "no":
            loopConf = False
        else:
            print("Wrong input given!")
    input("")