from database_conf import ConnectToModesCollection

class TransportationMean:
    __mode = 0

    def RetrieveAvailableModes(self, filterObj):
        modesList = []
        modeCol = ConnectToModesCollection()
        documents = modeCol.find(filterObj)

        for mode in documents:
            modesList[mode._id] = {"ID": mode._id, "NAME": mode.name}

        return modesList

    def AddNewModeIntoDatabase(self):
        loopMenu = True
        while loopMenu:
            modeName = input("Type the name of the mode here, type exit to cancel process: ")
            modesList = self.RetrieveAvailableModes({"name": modeName})

            if len(modesList) == 0:
                if modeName != "":
                    modeCol = ConnectToModesCollection()
                    modeCol.insert_one({"name": modeName})
                    loopMenu = False
                elif modeName == "exit":
                    return False
                else:
                    print("Name cannot be empty...")
            else:
                print("Mode already exists...")
        return True

    def DisplayModesMenu(self):
        modesList = self.RetrieveAvailableModes()

        print("---------------------------")
        count = 1
        for modeKey in modesList:
            print("\t " + count + ". " + modesList[modeKey].NAME + "["+modesList[modeKey].ID+"]")
            count += 1
        print("---------------------------")

    # -------- Getters / Setters -----------
    def GetTransportationMeansMode(self):
        return self.__mode

    def SetTransportationMeansMode(self, m):
        self.__mode = m
