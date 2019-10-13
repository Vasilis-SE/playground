import pymongo

def ConnectToUsersCollection():
    myclient = pymongo.MongoClient("mongodb://localhost:27017/")
    mydb = myclient["pythonTest"]
    mycol = mydb["users"]
    return mycol