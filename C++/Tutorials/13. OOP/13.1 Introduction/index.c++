#include <iostream>

using namespace std;

class Rectangle {
    public: 
        double length;
        double height;
};

int main() {
    Rectangle rect;

    rect.height = 21.43;
    rect.length = 243.12;

    cout << "Rectangle height is: " << rect.height << endl;
    cout << "Rectangle length is: " << rect.length << endl;

    return 0;
}