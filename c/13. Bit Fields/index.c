#include <stdio.h>

struct {
    int level;
    unsigned int isAdmin;
} userSimple;

struct {
    int level: 2; // Possible values are 1,2,3
    unsigned int isAdmin: 1;
} userWithBitFields;


int main() {
    printf("The size of a normal struct is: %i \n", sizeof(userSimple));
    printf("The size of a struct that uses bit fields is: %i \n", sizeof(userWithBitFields));
    return 0;
}