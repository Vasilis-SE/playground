import json

dictionary = {
    "fname": "Travis",
    "lname": "Jowes",
    "age": 45,
    "balance": 323.66,
    "isActive": True,
    "collection": [12,432,76,3,82,64]
}

# Write dictionary
handler = open("jsondemo.json", 'w')
handler.write( json.dumps(dictionary, indent=2) )
handler.close()

# Read from file
handler = open("jsondemo.json", 'r')
content = handler.read()
content = json.loads(content)

print(content)
