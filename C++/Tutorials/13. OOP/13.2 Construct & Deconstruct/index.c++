#include <iostream>

using namespace std;

class Rectangle
{
public:
    double length;
    double height;
    Rectangle(double l, double h)
    {
        length = l;
        height = h;
    }
};

int main()
{
    Rectangle rect(21.43, 243.12);

    cout << "Rectangle height is: " << rect.height << endl;
    cout << "Rectangle length is: " << rect.length << endl;

    return 0;
}