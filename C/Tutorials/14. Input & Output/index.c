#include <stdio.h>

#define MAX 100

int main()
{
    // getchar -> Reads a single character from user input
    // putchar -> Writes a single character on user's screen
    int c;

    printf("\n=====================\n");

    printf("Enter a character: ");
    c = getchar();
    getchar(); // Used to consume the \n character from the getchar above.
    printf("You entered: ");
    putchar(c);

    printf("\n=====================\n");

    // gets -> Reads input from user more than one characters
    // puts -> Writes multiple characters to output.
    char str[MAX];

    printf("Enter a value: ");
    gets(str);

    printf("You entered: ");
    puts(str);

    printf("=====================\n");
    char str2[MAX];
    int i;

    // scanf -> Reads input from user according to the format provided
    printf("Enter a value: ");
    scanf("%s %d", str2, &i);

    printf("You entered: %s %d ", str2, i);
    printf("\n=====================\n");

    return 0;
}