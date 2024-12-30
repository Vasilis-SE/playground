#include <iostream>
using namespace std;

#define LENGTH1 10   
#define WIDTH1  5

int main()
{
    const int LENGTH2 = 13;
    const int WIDTH2 = 4;

    cout << "Calculated 1st area is : " << (LENGTH1 * WIDTH1) << endl;
    cout << "Calculated 2nd area is : " << (LENGTH2 * WIDTH2) << endl;

    return 0;
}