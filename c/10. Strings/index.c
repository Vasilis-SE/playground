#include <stdio.h>
#include <string.h>

int main() {
    char greeting1[] = "Hello World";
    char greeting2[12] = {'H', 'e', 'l', 'l', 'o', ' ', 'W', 'o', 'r', 'l', 'd', '\0'};
    char greeting3[11] = {'H', 'e', 'l', 'l', 'o', ' ', 'W', 'o', 'r', 'l', 'd'};

    printf("1st Greetings Message: %s\n", greeting1);
    printf("2nd Greetings Message: %s\n", greeting2);
    printf("3rd Greetings Message: %s\n", greeting3);

    // strcpy -> copies a string into another
    char str1[11];
    strcpy(str1, "Hello World");
    printf("Variable content using strcpy: %s\n", str1);

    // strcat -> concatenates a string to another
    char str2[] = "Hello";
    strcat(str2, " World");
    printf("Variable content using strcat: %s\n", str2);

    // strlen -> length of a string
    printf("Length of greeting1: %i\n", strlen(greeting1));

    // strcmp -> compares 2 stings
    if(strcmp(greeting1, greeting2) == 0)  
        printf("Both string1 and string2 are identical \n");
    else if(strcmp(greeting1, greeting2) < 0)  
        printf("string1 has a lower character than string2 in the ASCII table \n");
    else
        printf("string2 has a lower character than string1 in the ASCII table \n");
        
    // strstr -> returns a pointer to the first occurance of a character between 2 strings
    char str3[] = "Hello World";
    char str4[] = "World";
    printf("The substring address of str3 is: %p \n", strstr(str3, str4));
    printf("The substring on str3 is: %s \n", strstr(str3, str4));

    return 0;
}