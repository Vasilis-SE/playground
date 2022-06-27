#include <stdio.h>
#include <stdbool.h>

int main()
{
    // Simple if-else condition
    int a = 10;
    if (a < 20)
    {
        printf("%i is less than 20...", a);
    }
    else
    {
        printf("%i is greater than 20...", a);
    }

    // Switch case condition
    char grade = 'B';
    switch (grade)
    {
    case 'A':
        printf("Excellent!\n");
        break;
    case 'B':
    case 'C':
        printf("Well done\n");
        break;
    case 'D':
        printf("You passed\n");
        break;
    case 'F':
        printf("Better try again\n");
        break;
    default:
        printf("Invalid grade\n");
    }

    printf("Your grade is  %c\n", grade);

    // Ternary operator
    bool isVisible = true;
    printf("The item is %s", isVisible ? "visible" : "not visible");

    return 0;
}