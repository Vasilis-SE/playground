#include <iostream>
using namespace std;

int main()
{
    cout << "\n=========== Integers ===========" << endl;
    cout << "Size of int : " << sizeof(int) << endl;
    cout << "Size of short int : " << sizeof(short int) << endl;
    cout << "Size of long int : " << sizeof(long int) << endl;
    cout << "Size of signed int : " << sizeof(signed int) << endl;
    cout << "Size of unsigned int : " << sizeof(unsigned int) << endl;

    cout << "\n=========== Floats ===========" << endl;
    cout << "Size of float : " << sizeof(float) << endl;

    cout << "\n=========== Doubles ===========" << endl;
    cout << "Size of double : " << sizeof(double) << endl;
    cout << "Size of long double : " << sizeof(long double) << endl;

    cout << "\n=========== Chars ===========" << endl;
    cout << "Size of char : " << sizeof(char) << endl;
    cout << "Size of unsigned char : " << sizeof(unsigned char) << endl;
    cout << "Size of signed char : " << sizeof(signed char) << endl;
    cout << "Size of wchar_t : " << sizeof(wchar_t) << endl;

    cout << "\n=========== Enums ===========" << endl;
    enum Color {red, green, blue, yellow, black};
    cout << "The color picked is : " << Color::black << endl;

    enum Direction {North='N', South='S', West='W', East='E'};
    cout << "The direction picked is : " << (char)Direction::West << endl;

    return 0;
}