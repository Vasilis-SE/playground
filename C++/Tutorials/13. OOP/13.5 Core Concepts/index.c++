#include <iostream>
#include "ivehicle.h"
#include "vehicle.h"
#include "car.h"
#include "truck.h"

using namespace std;

void printCar(Car car);

int main() {
    Vehicle *v1ptr;

    Car car1(1,975.47,false,3,4,"Suzuki","Swift");
    Truck truck1(2,2320.32,true,2,8,"Mercedes","Actros");
    
    std::cout << "----------------------------" << std::endl;
    v1ptr = &car1;
    v1ptr->print();
    std::cout << "----------------------------" << std::endl;
    v1ptr = &truck1;
    v1ptr->print();
    std::cout << "----------------------------" << std::endl;

    return 0;
}
