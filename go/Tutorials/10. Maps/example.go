package main

import "fmt"

func main() {
	var capital map[string]string
	capital = make(map[string]string)

	capital["France"] = "Paris"
	capital["Italy"] = "Rome"
	capital["Japan"] = "Tokyo"
	capital["India"] = "New Delhi"
	capital["Greece"] = "Athens"

	fmt.Println("\n\nInitial Map \n")
	printCapitals(capital)

	fmt.Println("\n\nRemove Items From Map \n")
	delete(capital, "Italy")
	printCapitals(capital)
}

func printCapitals(capital map[string]string) {
	for country := range capital {
		fmt.Println("Capital of ", country, " is ", capital[country])
	}
}
