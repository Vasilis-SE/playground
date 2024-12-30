#include <iostream>
using namespace std;

int main()
{
    int i = 10, j = 0;

    if (i == 10)
        cout << "The value of i is 10" << endl;
    else
        cout << "The value of i is not 10" << endl;

    j = i == 10 ? i : 5;

    switch (i / j)
    {
    case 1:
        cout << "Process has been successfully finished..." << endl;
        break;

    default:
        cout << "Process has not been successfully finished..." << endl;
    }

    return 0;
}