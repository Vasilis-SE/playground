class Transportation_Means:
    __mode = 0

    def __init__(self):
        self.__mode = 0

    def __init__(self, mode):
        self.__mode = mode

    def DisplayTransportationMeansMode(self, mode):
        transMeans = {
            1: "Air",
            2: "Rails",
            3: "Road",
            4: "Water",
            5: "Cable",
            6: "Pipeline",
            7: "Space"
        }
        return transMeans.get(mode, "No transportation means mode registered!")

    def GetTransportationMeansMode(self):
        return self.__mode

    def SetTransportationMeansMode(self, mode):
        self.__mode = mode
