num1 = int(input("Enter your first number: "));
num2 = int(input("Enter your second number: "));

if num1>num2:
    print("1st number is greater than the 2nd...",num1," > ", num2);
    if num2 > 0 or num2 < 0:
        print("Numbers can be divided...", str(num1/num2));
    else:
        print("Numbers cannot be divided, division by zero cannot be made...");
elif num1<num2:
    print("2nd number is greater than the 1st...",num1," < ", num2);
    if num2 > 0 or num2 < 0:
        print("Numbers can be divided...", str(num1/num2));
    else:
        print("Numbers cannot be divided, division by zero cannot be made...");
else:
    print("The two numbers are the same...", num1, " = ", num2);
    if num2 > 0 or num2 < 0:
        print("Numbers can be divided...", str(num1/num2));
    else:
        print("Numbers cannot be divided, division by zero cannot be made...");
  
print("---------------");

