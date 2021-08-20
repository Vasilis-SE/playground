names = ["jonathan", "bruce", "mark"];
print(names[0] + " - " + names[1] + " - " + names[2]);
print(names[-1] + " - " + names[-2] + " - " + names[-3]);

print("\n-------- Append & Extend --------\n");

names.append("judy");
names.append("trudy");
print(names);

age = [32, 43, 54, 23, 20];
print(age);

tmpnames1 = ["jonathan", "bruce", "mark"];
tmpnames1.append(age);
tmpnames2 = ["jonathan", "bruce", "mark"];
tmpnames2.extend(age);
print("Append on array: " + str(tmpnames1));
print("Extend the array: " + str(tmpnames2));

print("\n-------- List Remove --------\n");

print("Removed`mark` from the list...");
names.remove("mark");
print(names);

print("\n--------- Lengths -------\n");

print("Number of names: " + str(len(names)) );
print("Number of ages: " + str(len(age)) );

print("\n--------- Slicing -------\n");
print(age);
print(age[2:4]);
print(age[2:]);
print(age[:2]);
print(age[0:len(age):2]);
