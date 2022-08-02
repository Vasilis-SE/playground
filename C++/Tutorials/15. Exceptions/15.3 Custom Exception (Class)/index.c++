#include <iostream>
#include <string>
using namespace std;

class InvalidInput : public std::exception {
    private: 
        std::string message = "";

    public:
        InvalidInput(std::string msg = "") {
            message = msg != "" ? msg : "Invalid input provided...";
        }

        std::string what () {
            return message;
        }
};

int main() {
    try {
        int num;

        std::cout << "Enter a number: ";
        std::cin >> num;

        if(num == 0)
            throw InvalidInput();
    
    } catch(InvalidInput e) {
        std::cout << e.what() << std::endl;
    } catch(std::exception& e) {
        std::cout << e.what() << std::endl;
    }

    return 0;
}