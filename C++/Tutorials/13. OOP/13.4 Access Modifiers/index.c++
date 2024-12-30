#include <iostream>

using namespace std;

class Rectangle
{
private:
    double length;
    double height;

public:
    Rectangle(double l, double h)
    {
        length = l;
        height = h;
    }

    double calculateArea()
    {
        return length * height;
    }

    double getLength()
    {
        return length;
    }

    double getHeight()
    {
        return height;
    }

    void setLength(double l)
    {
        length = l;
    }

    void setHeight(double h)
    {
        height = h;
    }
};

int main()
{
    Rectangle rect(21.43, 243.12);

    cout << "Rectangle height is: " << rect.getHeight() << endl;
    cout << "Rectangle length is: " << rect.getLength() << endl;
    cout << "Rectangle area is: " << rect.calculateArea() << endl;

    return 0;
}