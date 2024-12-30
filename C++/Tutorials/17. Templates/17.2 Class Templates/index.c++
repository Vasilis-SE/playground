#include <iostream>
#include <vector>
#include <cstdlib>
#include <string>
#include <stdexcept>

using namespace std;

template <class T>
class Stack
{
    private:
        vector<T> elems; // elements

    public:
        bool empty() const
        {
            return elems.empty();
        }

        void push(T const &elem)
        {
            elems.push_back(elem);
        }

        void pop()
        {
            if (elems.empty())
                throw out_of_range("Stack<>::pop(): empty stack");

            elems.pop_back();
        }

        T top() const
        {
            if (elems.empty())
                throw out_of_range("Stack<>::top(): empty stack");

            return elems.back();
        }
};

int main()
{
    try {
        Stack<int> intStack;       // stack of ints
        Stack<string> stringStack; // stack of strings

        // manipulate int stack
        intStack.push(7);
        cout << intStack.top() << endl;

        // manipulate string stack
        stringStack.push("hello");
        cout << stringStack.top() << std::endl;
        stringStack.pop();
        stringStack.pop();
    } catch (exception const &ex) {
        cerr << "Exception: " << ex.what() << endl;
        return -1;
    }
}