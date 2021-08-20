names = ["jonathan", "mary", "andrew", "bruce", "mark", "delphy"];
count = 0;
while count < len(names):
    print("=> ", names[count]);
    count += 1;

print("---------------");

print("Factorial: ");
num1 = int(input("Enter a number to find its factorial: "));
count = 1;
factorialSteps = 1;
while count <= num1:
    factorialSteps *= count;
    print(count, " step: ", factorialSteps);
    count += 1;
    
print("The factorial of ", num1, " is: ", factorialSteps);

print("---------------");

for name in names:
    print("Name: ", name);

userObj = {
	"fname": "jonathan",
	"lname": "mayers",
	"age": 54
};

print("Object keys: ");
for userobjkey in userObj.keys() :
	print("\t > ", userobjkey);

print("Object values: ");
for userobjvalues in userObj.values() :
	print("\t > ", userobjvalues);

print("Object data: ");
for userobjkey, userobjvalue in userObj.items() :
	print("\t > ", userobjkey, " - ", userobjvalue);