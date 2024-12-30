#include <iostream>

using namespace std;

const int MAX = 3;

int main()
{
    int num = 20;
    int *addr = &num;

    cout << "Value of num is: " << num << " and its address is: " << addr << endl;
    cout << "The address points to a value: " << *addr << endl;

    int nums[MAX] = {10, 20, 30};
    int *numPtr;
    numPtr = nums;

    for (int i = 0; i < MAX; i++)
    {
        cout << "nums[" << i << "] is: " << numPtr << " and its value is: " << *numPtr << endl;
        numPtr++;
    }

    return 0;
}