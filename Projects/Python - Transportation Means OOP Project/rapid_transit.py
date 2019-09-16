class Rapid_Transit:
    __system = 0
    __linesNum = 0
    __network = 0
    __country = ""
    __city = ""
    __transitSystems = {
        1: "Tram & Light Rail Transit",
        2: "Tramway",
        3: "Rail Transport",
        4: "Premetro",
        5: "Metro",
        6: "Subway Automated Urban Metro",
        7: "Monorail",
        8: "Suburban & Commuter Rail",
        9: "Funicular Railway"
    }
    __networkTopologies = {
        1: "Line",
        2: "Cross",
        3: "X-Shaped",
        4: "Two Crossing Paths",
        5: "Secant",
        6: "Radial",
        7: "Circle",
        8: "Circle Radial",
        9: "Complex Grid"
    }

    def __init__(self):
        self.__system = 0
        self.__linesNum = 0
        self.__network = 0
        self.__country = ""
        self.__city = ""

    def __init__(self, sys=0, num=0, net=0, ctry="", city=""):
        self.__system = sys
        self.__linesNum = num
        self.__network = net
        self.__country = ctry
        self.__city = city

    def DisplaySystem(self, sysnum):
        return self.__transitSystems.get(sysnum, "No rapid transit system registered!")

    def DisplayRapidTransitNetworkTopology(self, network):
        return self.__networkTopologies.get(network, "No network topology registered!")

    def GetRapidTransitSystem(self):
        return self.__system

    def SetRapidTransitSystem(self, system):
        self.__system = system

    def GetRapidTransitNumberOfLines(self):
        return self.__linesNum

    def SetRapidTransitNumberOfLines(self, lines):
        self.__linesNum = lines

    def GetRapidTransitNetworkTopologies(self):
        return self.__network

    def SetRapidTransitNetworkTopologies(self, topology):
        self.__network = topology

    def GetMonorailCountryLocationName(self):
        return self.__country

    def SetMonorailCountryLocationName(self, name):
        self.__country = name

    def GetMonorailCityLocationName(self):
        return self.__city

    def SetMonorailCityLocationName(self, name):
        self.__city = name