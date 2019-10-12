from monorail import Monorail

def DisplayMenu():
    menuFlag = True
    while menuFlag:
        print("============ Transportation Means Application ============")
        print("Please select an option: ")
        print("\t 1. Display Registered Transportation Means")
        print("\t 2. Register Transportation Means")
        print("\t 3. Register Transportation Means System")
        print("\t 4. Register a New Transportation Vehicle")
        print("\t 5. Delete a Registered Transportation Vehicle")
        print("==========================================================")

        selection = int(input())
        if selection == 1 or selection == 2 or selection == 3 or selection == 4 or selection == 5:
            menuFlag = False

    if selection == 1:
        # asdadsd
    elif selection == 2:
        # asdsadsa
    elif selection == 3:
        # asd sa
    elif selection == 4:
        # asd asdad
    elif selection == 5:
        # asd asdad

def RegisterTransportationMeans:










def TransportationMeansSelector():
    handler = open("./Database/Transportation.Means.Database.json")

def DisplayRegisteredMeans():
    menuFlag = True
    while menuFlag:
        print("============ Transportation Means Categories ============")
        print("Select the means category: ")
        print("\t 1. Rapid Transit")
        print("\t 2. Rail Ways")
        print("\t 3. Water Ways")
        print("\t 4. Air Ways")
        print("=========================================================")

        selection = int(input())
        if selection == 1 or selection == 2 or selection == 3 or selection == 4:
            menuFlag = False

    if selection == 1:
        # TODO: Rapid Transit
    elif selection == 2:
        # TODO: Rail Ways
    elif selection == 3:
        # TODO: Water Ways
    elif selection == 4:
        # TODO: Air Ways





def RegisterNewTransportationMeans():


DisplayMenu()


# handler = open("./Database/")
# monorail = Monorail("Mumbai Monorail", 5, ("Silver", "Blue"), "India", "Mumbai", 7, 1, 4, 2, 80.0, 65)
# monorail.DisplayMonorailInformation()
# monorail.CalculateMonorailTimeByDistanceAndSpeed()