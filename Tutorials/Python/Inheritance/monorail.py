from transportation_means import Transportation_Means
from rapid_transit import Rapid_Transit

class Monorail (Transportation_Means, Rapid_Transit):
    __wagonsNum = 0
    __colors = ()
    __country = ""
    __city = ""

    # Initialize constructor
    def __init__(self):
        self.__wagonsNum = 0
        self.__colors = ()
        self.__country = ""
        self.__city = ""

    # Constructor for setting monorail data
    def __init__(self, wagons=0, colors=(), country="", city=""):
        self.__wagonsNum = wagons
        self.__colors = colors
        self.__country = country
        self.__city = city

    # Constructor for setting monorail, rapid transit & transportation mean data
    def __init__(self, wagons=0, colors=(), country="", city="", sys=0, lines=0, net=0, mode=0):
        self.SetTransportationMeansMode(mode)
        self.SetRapidTransitSystem(sys)
        self.SetRapidTransitNumberOfLines(lines)
        self.SetRapidTransitNetworkTopologies(net)
        self.__wagonsNum = wagons
        self.__colors = colors
        self.__country = country
        self.__city = city

    def DisplayMonorailInformation(self):
        print("Transportation Means Mode: ", self.DisplayTransportationMeansMode(self.GetTransportationMeansMode()))
        print("Rapid Transit Type: ", self.DisplaySystem(self.GetRapidTransitSystem()))
        print("Rapid Transit Number Of Lines: ", self.GetRapidTransitNumberOfLines())
        print("Rapid Transit Network Topology: ", self.DisplayRapidTransitNetworkTopology(self.GetRapidTransitNetworkTopologies()))
        print("Country Location: ", self.__country)
        print("City Location: ", self.__city)
        print("Colors: ", self.__colors)
        print("Number Of Wagons: ", self.__wagonsNum)


    def GetWagonsNumber(self):
        return self.__wagonsNum

    def SetWagonsNumber(self, num):
        self.__wagonsNum = num

    def GetMonorailColors(self):
        return self.__colors

    def SetMonorailColors(self, colors):
        self.__colors = colors

    def GetMonorailCountryLocationName(self):
        return self.__country

    def SetMonorailCountryLocationName(self, name):
        self.__country = name

    def GetMonorailCityLocationName(self):
        return self.__city

    def SetMonorailCityLocationName(self, name):
        self.__city = name