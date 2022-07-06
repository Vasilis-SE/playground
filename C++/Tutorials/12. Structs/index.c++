#include <iostream>
#include <string>

using namespace std;

void printUser(struct User user);

struct User
{
    string name;
    int age;
    double balance;
};

int main()
{
    struct User user1;

    user1.name = "Jonathan Mayers";
    user1.age = 23;
    user1.balance = 439.42;

    printUser(user1);

    return 0;
}

void printUser(struct User user)
{
    cout << "Name: " << user.name << endl;
    cout << "Age: " << user.age << endl;
    cout << "Balance: " << user.balance << endl;
    cout << "-----------------------------------" << endl;
}