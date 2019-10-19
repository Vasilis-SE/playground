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
        else:
            print("Good Bye!")
            loopMenu = False
    return 0

def MenuSelectionProcess(selection):
    if selection == 1:
        DisplayAvailableTransportationModes()
    elif selection == 2:
        pass
    elif selection == 3:
        pass
    elif selection == 4:
        pass
    elif selection == 5:
        pass
    elif selection == 6:
        pass
    else:
        return 0

def DisplayAvailableTransportationModes():
    allModes = transMeansObj.RetrieveAvailableModes()

    print("-------------------")
    print("Modes:")
    for mode in allModes:
        print("\t > " + mode["NAME"])
    print("-------------------")