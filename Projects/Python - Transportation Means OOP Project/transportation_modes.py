from database_conf import ConnectToModesCollection
from pymongo import errors

class Mode:
    __modeID = ""
    __modeName = ""

    def __init__(self, mid="", mn=""):
        self.__modeID = mid
        self.__modeName = mn

    def RetrieveAvailableModes(self, filterObj={}):
        modesList = []
        modeCol = ConnectToModesCollection()
        documents = modeCol.find(filterObj)

        for mode in documents:
            modesList.append({"ID": mode["_id"], "NAME": mode["name"]})

        return modesList

    def AddNewModeIntoDatabase(self):
        modeCol = ConnectToModesCollection()
        modeCol.insert_one({"name": self.__modeName})
        return True

    def NewModeForm(self):
        loopMenu = True
        while loopMenu:
            modeName = input("Type the name of the mode here, type exit to cancel process: ")
            modesList = self.RetrieveAvailableModes({"name": modeName})

            if len(modesList) == 0:
                if modeName != "" and modeName != "exit":
                    self.SetTransportationMeansModeName(modeName)
                    loopMenu = False
                elif modeName == "exit":
                    return False
                else:
                    print("Name cannot be empty...")
            else:
                print("Mode already exists...")
        return True

    def DisplayModesMenu(self):
        loopMenu = True
        selModeObj = {}
        modesList = self.RetrieveAvailableModes()

        while loopMenu:
            print("Select one of the following modes: ")
            count = 1
            for mode in modesList:
                print("\t " + str(count) + ". " + mode["NAME"])
                count += 1
            selection = int(input())

            if 0 < selection <= len(modesList):
                selModeObj = modesList[selection - 1]
                loopMenu = False

        return selModeObj

    def DeleteModeFromDatabase(self, filterObj={}):
        modeCol = ConnectToModesCollection()

        try:
            modeCol.delete_one(filterObj)
        except:
            return False

        return True


    # -------- Getters / Setters -----------
    def GetTransportationMeansMode(self):
        return self.__modeID

    def SetTransportationMeansMode(self, m):
        self.__modeID = m

    def GetTransportationMeansModeName(self):
        return  self.__modeName

    def SetTransportationMeansModeName(self, n):
        self.__modeName = n