#include <iostream>

class Car: public Vehicle, virtual public IVehicle {
    private:
        int doors;
        int wheels;
        std::string brand;
        std::string model;

    public: 
        Car(int t, double we, bool ifc, int d, int w, std::string b, std::string m) : Vehicle(t, we, ifc) 
        {
            doors = d;
            wheels = w;
            brand = b;
            model = m;
        }

        void print() {
            std::cout << "Vehicle Type: " << type << std::endl;
            std::cout << "Vehicle Weight (kg): " << weight << std::endl;
            std::string usedForCargoMsg = isForCargo ? "Yes" : "No";
            std::cout << "Is Vehicle Used For Cargo Transport: " << usedForCargoMsg << std::endl;

            std::cout << "Brand: " << brand << std::endl;
            std::cout << "Model: " << model << std::endl;
            std::cout << "Number of Doors: " << doors << std::endl;
            std::cout << "Number of Wheels: " << wheels << std::endl;
        }

        int getDoors() { return doors; }
        int getWheels() { return wheels; }
        std::string getBrand() { return brand; }
        std::string getModel() { return model; }

        void setDoors(int d) { doors = d; }
        void setWheels(int w) { wheels = w; }
        void setBrand(std::string b) { brand = b; }
        void setModel(std::string m) { model = m; }
};