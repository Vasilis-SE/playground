import pymongo
from pymongo import errors
from datetime import datetime

def ConnectToModesCollection():
    today = datetime.today()

    try:
        mongoClient = pymongo.MongoClient("mongodb://localhost:27017/")
        database = mongoClient["transportation"]
        collection = database["modes"]
    except pymongo.errors.ConnectionFailure as e:
        LogErrorOnLogFile(
            "logs/ConnectionErrors/"+today.strftime("%d/%m/%Y"),
            "[" + today.strftime("%H:%M:%S") + "] Could not connect with transportation database! "
        )
    except pymongo.errors.CollectionInvalid as e:
        LogErrorOnLogFile(
            "logs/CollectionErrors/"+today.strftime("%d/%m/%Y"),
            "[" + today.strftime("%H:%M:%S") + "] Could not connect with modes collection! "
        )

    return collection

def LogErrorOnLogFile(path="", message=""):
    f = open(path, "a+")
    f.write(message + "\n")
    f.close()