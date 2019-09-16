from monorail import Monorail

def DisplayMenu():
    menuFlag = True

    while menuFlag:
        print("============ Transportation Means Application ============")
        print("Please select an option: ")
        print("\t 1. Display Registered Transportation Means")
        print("\t 2. Register a New Transportation Vehicle")
        print("\t 3. Delete a Registered Transportation Vehicle")
        print("==========================================================")

        selection = int(input())
        if selection == 1 or selection == 2 or selection == 3:
            menuFlag = False

    return selection

def DisplayRegisteredMeans():
    print("============ Transportation Means Categories ============")
    print("Select the means category: ")
    print("\t 1. Rapid Transit")
    print("\t 2. Rail Ways")
    print("\t 3. Water Ways")
    print("\t 4. Air Ways")
    print("=========================================================")



def MenuSelectionController(selection):
    if selection == 1:

    else if selection == 2:

    else if selection == 3:



DisplayMenu()


# handler = open("./Database/")
# monorail = Monorail("Mumbai Monorail", 5, ("Silver", "Blue"), "India", "Mumbai", 7, 1, 4, 2, 80.0, 65)
# monorail.DisplayMonorailInformation()
# monorail.CalculateMonorailTimeByDistanceAndSpeed()