#include <stdio.h>

int main() {
    // a and b is the lvalue expressions while 10 on both occasions 
    // are the rvalue expressions

    int a = 10;
    int b = 10;
    printf("The result of addition is: %i", a+b);

    return 0;
}