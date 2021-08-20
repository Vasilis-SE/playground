from transportation_means import Transportation_Means
from rapid_transit import Rapid_Transit

class Monorail (Transportation_Means, Rapid_Transit):
    __name = ""
    __wagonsNum = 0
    __colors = ()
    __topspeed = 0 # km/hour
    __avgspeed = 0 # km/hour

    # Initialize constructor
    def __init__(self):
        self.__name = ""
        self.__wagonsNum = 0
        self.__colors = ()
        self.__topspeed = 0
        self.__avgspeed = 0

    # Constructor for setting monorail data
    def __init__(self, name="", wagons=0, colors=(), tspeed=0.0, aspeed=0.0):
        self.__name = name
        self.__wagonsNum = wagons
        self.__colors = colors
        self.__topspeed = tspeed
        self.__avgspeed = aspeed

    # Constructor for setting monorail, rapid transit & transportation mean data
    def __init__(self, name="", wagons=0, colors=(), country="", city="", sys=0, lines=0, net=0, mode=0, tspeed=0.0, aspeed=0.0):
        Transportation_Means.__init__(self, mode)
        Rapid_Transit.__init__(self, sys, lines, net, country, city)
        self.__name = name
        self.__wagonsNum = wagons
        self.__colors = colors
        self.__topspeed = tspeed
        self.__avgspeed = aspeed

    def DisplayMonorailInformation(self):
        print("Transportation Means Mode: ", self.DisplayTransportationMeansMode(self.GetTransportationMeansMode()))
        print("Rapid Transit Type: ", self.DisplaySystem(self.GetRapidTransitSystem()))
        print("Rapid Transit Number Of Lines: ", self.GetRapidTransitNumberOfLines())
        print("Rapid Transit Network Topology: ", self.DisplayRapidTransitNetworkTopology(self.GetRapidTransitNetworkTopologies()))
        print("Country Location: ", self.GetMonorailCountryLocationName())
        print("City Location: ", self.GetMonorailCityLocationName())
        print("Colors: ", self.__colors)
        print("Number Of Wagons: ", self.__wagonsNum)

    def CalculateMonorailTimeByDistanceAndSpeed(self):
        distance = int(input("Enter the distance that the monorail has to cross in meters: "))
        time = (distance / (self.__topspeed * 1000)) * 60 #minutes

        hours = 0
        minutes = int(time)
        seconds = (time - minutes) * 60

        if (minutes / 60) > 0:
            hours = int(minutes / 60)
            minutes = minutes % 60

        print("The time requiered is: \n")
        print("Hours: ", hours)
        print("Minutes: ", minutes)
        print("Seconds: ", seconds)


    def GetWagonsNumber(self):
        return self.__wagonsNum

    def SetWagonsNumber(self, num=0):
        try:
            self.__wagonsNum = int(num)
            return True
        except ValueError:
            return False

    def GetMonorailColors(self):
        return self.__colors

    def SetMonorailColors(self, colors):
        self.__colors = colors

    def GetMonorailName(self):
        return self.__name

    def SetMonorailName(self, name):
        self.__name = name

    def GetMonorailTopSpeed(self):
        return self.__topspeed

    def SetMonorailTopSpeed(self, speed):
        self.__topspeed = speed

    def GetMonorailAverageSpeed(self):
        return self.__avgspeed

    def SetMonorailAverageSpeed(self, speed):
        self.__avgspeed = speed