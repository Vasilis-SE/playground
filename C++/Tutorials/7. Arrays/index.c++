#include <iostream>
using namespace std;

#define _SIZE 5

double sum(double arr[_SIZE]);
double mul(double arr[_SIZE]);

int main()
{
    double arr[_SIZE] = {1.4, 2.7, 3.23, 4.12, 5.99};
    cout << "Sum of array [1.4,2.7,3.23,4.12,5.99] is: " << sum(arr) << endl;
    cout << "Multiplication of array [1.4,2.7,3.23,4.12,5.99] is: " << mul(arr) << endl;
    return 0;
}

double sum(double arr[_SIZE])
{
    int i, sum = 0;
    for (i = 0; i < _SIZE; i++)
        sum += arr[i];
    return sum;
}

double mul(double arr[_SIZE])
{
    int i, sum = 1;
    for (i = 0; i < _SIZE; i++)
        sum *= arr[i];
    return sum;
}