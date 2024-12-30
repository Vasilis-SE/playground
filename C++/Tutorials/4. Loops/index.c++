#include <iostream>
using namespace std;

int main()
{
    int i, sum=0;
    for (i = 0; i < 10; i++) {
        sum += i;
    }
    
    cout << "The sum is: " << sum << endl;

    while (i > 0)
    {
        sum *= i;
        i--;
    }

    cout << "The multiplication is: " << sum << endl;

    do
    {
        cout << "Loops ended..." << endl;
    } while (i != 0);

    return 0;
}