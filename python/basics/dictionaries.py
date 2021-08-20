def PrintDictionary(dictionary):
    print(" ------------ ");
    for key, value in dictionary.items():
        print("\t >", key, ": ", value)
    print(" ------------ ");

#===========================================

dictionary = {
    "First Name": "John",
    "Last Name": "Doe",
    "Age": 27,
    "Balance": 8452.15,
    150: 400,
    19.4: 300,
    True: True,
    (2,3): 5
}

print("====== Print The Dictionary =====")
PrintDictionary(dictionary);

print("====== Removed The Tuple Key =====")
dictionary.pop((2,3))
PrintDictionary(dictionary);

print("====== Updated Dictionary =====")
dictionary.update({"Age": 32})
PrintDictionary(dictionary);
