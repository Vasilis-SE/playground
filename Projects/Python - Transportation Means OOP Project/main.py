import json
from monorail import Monorail

def FetchTransportationModesSystemsData():
    handler = open("./Database/Transportation.Means.Database.json", "r")
    content = handler.read()
    content = json.loads(content)
    return content

def InitializeModeSystemData():
    modeSysDictionary = None

    for mode in content:
        modeID = mode.id
        modeName = mode.name

        for system in mode.systems:
            systemID = system.id
            systemName = system.name

            modeSysDictionary = {}


def InitializeTransportationMeansData(content):
    meansList = None

    for mode in content:
        modeID = mode.id
        modeName = mode.name

        for system in mode.systems:
            systemID = system.id
            systemName = system.name

            for mean in system.means:
                if systemID == 1:
                    object = Monorail(modeName, mean.wagons_number, mean.colors, mean.country, mean.city, systemID, mean.lines_number, mean.network_type, modeID, mean.top_speed, mean.average_speed)

                meansList.append(object)

    return meansList

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


    #elif selection == 3:
    #    # asd sa
    #elif selection == 4:
    #    # asd asdad
    #elif selection == 5:
        # asd asdad

dbContent = FetchTransportationModesSystemsData()
meansList = InitializeTransportationMeansData(dbContent)

# DisplayMenu()


# handler = open("./Database/")
# monorail = Monorail("Mumbai Monorail", 5, ("Silver", "Blue"), "India", "Mumbai", 7, 1, 4, 2, 80.0, 65)
# monorail.DisplayMonorailInformation()
# monorail.CalculateMonorailTimeByDistanceAndSpeed()