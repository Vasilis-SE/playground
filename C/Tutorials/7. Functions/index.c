#include <stdio.h>

int addition(int num1, int num2)
{
    return num1 + num2;
}

int subtraction(int num1, int num2)
{
    return num1 - num2;
}

int main()
{
    printf("Result of addition is: %i \n", addition(10, 21));
    printf("Result of subtraction is: %i \n", subtraction(10, 21));
    return 0;
}