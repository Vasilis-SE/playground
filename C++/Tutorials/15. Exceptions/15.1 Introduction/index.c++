#include <iostream>
using namespace std;

double division(double n1, double n2);

int main() {

    try {
        double result = division(20.23, 0.0);
        std::cout << result << std::endl;
    } catch(const char* msg) {
        std::cerr << msg << std::endl;
    }
    
    return 0;
}

double division(double n1, double n2) {
    if(n2 == 0)
        throw "Invalid operation! Cannot divide by zero";

    return n1/n2;
}