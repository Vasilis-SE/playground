#include <iostream>
#include <exception>
using namespace std;

struct InvalidInput : public exception {
   const char * what () const throw () {
      return "Invalid input provided...";
   }
};

int main() {
   try {
      int num;

      std::cout << "Enter a number: ";
      std::cin >> num;

      if(num == 0)
         throw InvalidInput();
 
   } catch(InvalidInput& e) {
      std::cout << e.what() << std::endl;
   } catch(std::exception& e) {
      std::cout << e.what() << std::endl;
   }

   return 0;
}