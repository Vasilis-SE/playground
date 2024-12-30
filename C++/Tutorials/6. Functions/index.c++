#include <iostream>
using namespace std;

// Function declarations
int sum(int num);

int main() {
    cout << "Result of the sum for integer 100 is : " << sum(100) << endl;
    return 0;
}

int sum(int num) {
    int i, sum=0;
    for(i=1; i<=num; i++) 
        sum += i;

    return sum;
}