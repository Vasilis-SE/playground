#include <stdio.h>
#include <stdbool.h>

int main()
{

    // While loop
    int i = 0;
    while (i < 10)
    {
        printf("while loop %i ...\n", i);
        i++;
    }

    // For loop
    int x;
    for (x = 10; x > 0; x--)
    {
        printf("for loop %i ...\n", x);
    }

    // Do while, it will be executed at least once
    int count = 0;
    do
    {
        printf("count is %i ...\n", count);
    } while (count != 0);

    return 0;
}