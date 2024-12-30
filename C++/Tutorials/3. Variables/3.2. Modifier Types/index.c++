#include <iostream>
using namespace std;

int main()
{
    short int i;
    short unsigned int j;
    volatile int k;

    j = 50000;
    k = 23;

    i = j;
    cout << "i: " << i << " j: " << j;
    k = 50000000;

    return 0;
}