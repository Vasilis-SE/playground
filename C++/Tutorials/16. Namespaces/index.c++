#include <iostream>
#include <string>
using namespace std;

struct User
{
    string fname;
    string lname;
    int level;
};

namespace first_info_space {
    void printUser(User user) {
        cout << "Name: " << user.fname << " - " << user.lname << endl;
    }
}

namespace second_info_space {
    void printUser(User user) {
        cout << "First Name: " << user.fname << endl;
        cout << "Last Name: " << user.lname << endl;
        cout << "Level: " << user.level << endl;
    }
}

int main() {
    struct User user1;

    user1.fname = "Jonathan";
    user1.lname = "Mayers";
    user1.level = 2;

    cout << "-------------------------------" << endl;
    first_info_space::printUser(user1);
    cout << "-------------------------------" << endl;
    second_info_space::printUser(user1);
    cout << "-------------------------------" << endl;


    return 0;
}