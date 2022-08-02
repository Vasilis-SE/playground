class Vehicle: virtual public IVehicle
{
    protected:
        int type;
        double weight;
        bool isForCargo;

    public:
        Vehicle(int t, double w, bool isfc) {
            type = t;
            weight = w;
            isForCargo = isfc;
        }

        int getType() { return type; }
        double getWeight() { return weight; }
        bool getIsUsedForCargo() { return isForCargo; }
        void setType(int t) { type = t; }
        void setWeight(double w) { weight = w; }
        void setIsUsedForCargo(bool c) { isForCargo = c; }
};