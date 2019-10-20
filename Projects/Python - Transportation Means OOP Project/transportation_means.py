from transportation_modes import Mode
from database_conf import ConnectToMeansCollection

class Means(Mode):
    __meansID = ""
    __meansName = ""
    __forPassengers = 0
    __forFreights = 0

    def __init__(self, mid="", mname="", meid="", mnm="", fpas=0, ffre=0):
        self.__modeID = mid
        self.__modeName = mname
        self.__meansID = meid
        self.__meansName = mnm
        self.__forPassengers = fpas
        self.__forFreights = ffre

    def RetrieveAvailableMeans(self, filterObj={}):
        meansList = []
        meansCol = ConnectToMeansCollection()
        documents = meansCol.find(filterObj)

        for mean in documents:
            meansList.append({
                "ID": mean["_id"],
                "NAME": mean["name"],
                "IS_FORPASS": mean["for_passengers"],
                "IS_FORFREI": mean["for_freights"]
            })
        return meansList

    def NewTransportationMeansForm(self):
        loopMenu = True
        while loopMenu:
            modeObject = self.DisplayModesMenu()

            meansName = input("Type the name of the means category here, type exit to cancel process: ")
            if meansName == "exit":
                return False

            isForPassengers = input("Type yes/no if the means category is made for passenger transportation, "
                                    "type exit to cancel process: ")
            if isForPassengers == "exit":
                return False

            isForFreights = input("Type yes/no if the means category is made for freight transportation, "
                                  "type exit to cancel process: ")
            if isForFreights == "exit":
                return False

            meansCheck = self.RetrieveAvailableMeans({"name": meansName})

            if len(meansCheck) == 0:
                if meansName != "" and isForFreights != "" and isForPassengers != "" and len(modeObject) != 0:
                    self.SetMeansParentModeID(modeObject["ID"])
                    self.SetMeansParentModeName(modeObject["NAME"])
                    self.SetMeansName(meansName)
                    self.SetForPassengersFlag(isForPassengers == "yes" if 1 else 0)
                    self.SetForFreightsFlag(isForFreights == "yes" if 1 else 0)
                    loopMenu = False
                else:
                    print("One or more fields of the form are empty!")
            else:
                print("This means name already exist on database!")

        return True

    def AddNewTransportationMeans(self):
        meansCol = ConnectToMeansCollection()
        meansCol.insert_one({
            "modeid": self.__modeID,
            "modename": self.__modeName,
            "name": self.__meansName,
            "for_passengers": self.__forPassengers,
            "for_freights": self.__forFreights
        })
        return True

    def DeleteTransportationMeans(self, filterObj={}):
        meansCol = ConnectToMeansCollection()

        try:
            meansCol.delete_one(filterObj)
        except:
            return False

        return True

    def DisplayMeansMenu(self):
        loopMenu = True
        selectedMeansObj = {}
        availableMeans = self.RetrieveAvailableMeans()

        while loopMenu:
            print("Select one of the following: ")
            count = 1
            for mean in availableMeans:
                print("\t " + str(count) + ". " + mean["NAME"])

            selection = int(input())
            if 0 < selection <= len(availableMeans):
                selectedMeansObj = availableMeans[selection - 1]
                loopMenu = False

        return selectedMeansObj

    # ========== Getters / Setters =========
    def GetMeansParentModeID(self):
        return self.__modeID

    def SetMeansParentModeID(self, mid):
        self.__modeID = mid

    def GetMeansParentModeName(self):
        return self.__modeName

    def SetMeansParentModeName(self, nm):
        self.__modeName = nm

    def GetMeansID(self):
        return self.__meansID

    def SetMeansID(self, mid):
        self.__meansID = mid

    def GetMeansName(self):
        return self.__meansName

    def SetMeansName(self, mna):
        self.__meansName = mna

    def GetForPassengeresFlag(self):
        return self.__forPassengers

    def SetForPassengersFlag(self, fps):
        self.__forPassengers = fps

    def GetForFreightsFlag(self):
        return self.__forFreights

    def SetForFreightsFlag(self, fff):
        self.__forFreights = fff
