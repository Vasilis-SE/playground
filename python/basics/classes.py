class Ratings:
    def __init__(self, rating):
        self.rating = rating

    def __del__(self):
        self.rating = 0

    def SetGameRatting(self):
        loopFlag = True
        
        while loopFlag:
            gameRating = int(input("Enter the game's rating: "))
            if gameRating is not None:
                if gameRating <= 10:
                    loopFlag = False
                else:
                    print("You need to enter rating between 0 and 10!")
                
        self.rating = gameRating

    def GetRatingOfGame(self):
        return self.rating

class Games (Ratings):
    def __init__(self, name, console, rating):
        self.name = name
        self.rating = rating
        self.console = console

    def __del__(self):
        self.name = ""
        self.console = 0

    def SetGameName(self, name):
        loopFlag = True
        gameName = ""
        while (loopFlag):
            gameName = input("Enter the name of the game: ")
            if gameName != "":
                loopFlag = False
            else:
                print("You need to enter a game name...")
            
        self.name = gameName

    def SetGameConsole(self, console):
        loopFlag = True
        while (loopFlag):
            print("Select one of the following consoles: ")
            print("\t 1. PC")
            print("\t 2. Playstation 4")
            print("\t 3. XBox")
            print("\t 4. PSP")
            print("\t 5. Wii")

            console = int(input(""))
            if console == 1 or console == 2 or console == 3 or console == 4 or console == 5:
                loopFlag = False

        self.console = console

    def GetGameName(self): return self.name

    def GetGameConsole(self, consoleID):
        if self.console == 1: return "PC"
        elif self.console == 2: return "Playstation 4"
        elif self.console == 3: return "XBox"
        elif self.console == 4: return "PSP"
        elif self.console == 5: return "Wii"
 
gamesDB = []

# Pre init objects
game = Games("Gothic 1", 1, 10)
gamesDB.append(game)
game = Games("Deus X", 1, 3)
gamesDB.append(game)
game = Games("Guild Wars Factions", 1, 10)
gamesDB.append(game)
game = Games("Ty the Tasmanian Tiger", 1, 7)
gamesDB.append(game)

loopBreak = False
while(loopBreak == False):
    print("========================")
    print("*********** Menu *************")
    print("Select your action: ")
    print("\t 1. Add New Game")
    print("\t 2. Remove Game")
    print("\t 3. View Game List")
    print("\t 4. Exit")
    print("******************************")
    print("========================")

    action = int(input(""))
    if action == 1:
        game = Games("", "", 0)
        game.SetGameName("")
        game.SetGameConsole("")
        game.SetGameRatting()
        gamesDB.append(game)
    elif action == 2:
        if len(gamesDB) > 0:
            gameDelBreakFlag = False

            while(gameDelBreakFlag == False):
                print("Select a game:")
                count = 1
                for game in gamesDB:
                    print(count, ". ", game.GetGameName())
                    count += 1
                print (count, ".  Return to menu")

                gameSel = int(input(""))
                if gameSel >= 0 and gameSel <= count-1:
                    gameSel -= 1
                    gameDelConfFlag = False

                    while(gameDelConfFlag == False):
                        print("Are you sure you want to delete ", gamesDB[gameSel].GetGameName(), " yes/no ")
                        conf = input("")
                        if conf == "yes":
                            gameDelConfFlag = True
                            gamesDB.pop(gameSel)
                        elif conf == "no":
                            gameDelConfFlag = True
                elif gameSel == count:
                    gameDelBreakFlag = True
                            
        else:
            print("There are no stored games in order to delete one...")
    elif action == 3:
        for game in gamesDB:

            starDisp = ""
            rating = game.GetRatingOfGame()
            for star in range(rating):
                starDisp += "*"

            print("Game Info: ")
            print("\t Name: ", game.GetGameName())
            print("\t Console: ", game.GetGameConsole(game.console))
            print("\t Rating: ", starDisp, "(",rating,")")
            print("-----------------------")
    elif action == 4:
        loopBreak = True
     

