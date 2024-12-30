def Addition(num1, num2):
    return (num1 + num2);

def Subtraction(num1, num2):
    return (num1 - num2);

def Multiplication(num1, num2):
    return (num1 * num2);

def Division(num1, num2):
    if num2 == 0:
        return "You cannot divide by zero!";
    else:
        return (num1 / num2);

def Factorial(num):
    count = 1;
    factorial = 1;
    
    while count <= num:
        factorial *= count;
        count += 1;

    return factorial;

print("Select one of the following processes: ");
print("\t1. Addition");
print("\t2. Subtraction");
print("\t3. Multiplication");
print("\t4. Division");
print("\t5. Factorial");

process = int(input(""));

if process == 1:
    num1 = int(input("Enter first number: "));
    num2 = int(input("Enter second number: "));
    print("Result: ", Addition(num1, num2));
elif process == 2:
    num1 = int(input("Enter first number: "));
    num2 = int(input("Enter second number: "));
    print("Result: ",Subtraction(num1, num2));
elif process == 3:
    num1 = int(input("Enter first number: "));
    num2 = int(input("Enter second number: "));
    print("Result: ",Multiplication(num1, num2));
elif process == 4:
    num1 = int(input("Enter first number: "));
    num2 = int(input("Enter second number: "));
    print("Result: ",Division(num1, num2));
elif process == 5:
    num = int(input("Enter number: "));
    print("Result: ",Factorial(num));
else:
    print("Wrong input given...");

