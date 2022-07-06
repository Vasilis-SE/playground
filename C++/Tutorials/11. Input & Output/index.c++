#include <iostream>
#include <string>

using namespace std;

int main()
{
    string greetings = "Hello C++";
    cout << "Value of str is : " << greetings << endl;

    string name;
    cout << "Please enter your full name: ";
    getline(cin, name);
    cout << "Your name is: " << name << endl;

    return 0;
}