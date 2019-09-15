class Transportation_Means:
    __category = None

    def __init__(self):
        self.__category = 0

    def GetTransportationMeansCategory(self):
        return self.__category

    def SetTransportationMeansCategory(self, categ):
        self.__category = categ
