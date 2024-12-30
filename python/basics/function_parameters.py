def Addittion(num1 = 0, num2 = 0):
    print("The result is: ", num1 + num2)

def AddittionArgs(num1=0, num2=0, *args):
    totalSum = 0
    print("1. ", num1)
    print("2. ", num2)
    totalSum = num1 + num2
    i = 3
    for number in args:
        totalSum += number
        print(i,". ", number)
        i+=1

    print("Final Result Is: ", totalSum)

def AddittionKeyValueArgs(**args):
    print("School Data: ")
    for key, value in args.items():
        print("\t > ", key, " = ", value)

print(" ---------------- ")
print("Default Values On Function Example: ")
Addittion(1, 2)
Addittion(0, 1)
Addittion(10)

print(" ---------------- ")
print("Args Function Parameter: ")
AddittionArgs(3,5,6,2,12,76,5,90,23,63,23)

print(" ---------------- ")
print("Key Value Args Function Parameter: ")
AddittionKeyValueArgs(students=40, courses=20, passed=23)