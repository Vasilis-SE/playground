package main

import "fmt"

type Car struct {
	company      string
	model        string
	release_year int
	door_number  int
}

func main() {
	var car1 Car
	car1.company = "Suzuki"
	car1.model = "Swift Sport"
	car1.release_year = 2007
	car1.door_number = 3

	var car2 = Car{
		company:      "Tesla",
		model:        "Model 3",
		release_year: 2017,
		door_number:  5,
	}

	var car3 = Car{
		company:      "Toyota",
		model:        "C-HR",
		release_year: 2018,
		door_number:  5,
	}

	fmt.Printf("----------- Cars Database ---------\n")
	display_database(&car1)
	display_database(&car2)
	display_database(&car3)
}

func display_database(car *Car) {
	fmt.Printf(
		"%s\t%s\t%d\t%d\n",
		car.company,
		car.model,
		car.release_year,
		car.door_number,
	)
}
