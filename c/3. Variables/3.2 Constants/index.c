#include <stdio.h>

#define NUMB 10

/*
    There are 2 ways to define constants using #define and const prefix.
*/
int main() {
    int a = 11;
    const int _VAL2 = 12;

    int res1 = NUMB+a;
    int res2 = NUMB+_VAL2;
    printf("Result 1: %i \n", res1);
    printf("Result 2: %i \n", res2);
}