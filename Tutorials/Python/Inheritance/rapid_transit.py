# 1. tram and light rail transit systems
# 2. tramway systems
# 3. rail transport system
# 4. premetro systems
# 5. metro systems
# 6. automated urban metro subway systems
# 7. monorail systems
# 8. suburban and commuter rail systems
# 9. funicular railways

from transportation_means import Transportation_Means

class Rapid_Transit (Transportation_Means):
    __system = None
    __linesNum = 0
    __network = 0

    def __init__(self):
        self.__system = 0
        self.__linesNum = 0
        self.__network = 0

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