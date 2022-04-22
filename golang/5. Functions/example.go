package main

import (
	"fmt"
	"strconv"
	"strings"
)

func add(num1 float64, num2 float64) float64 {
	return num1 + num2
}

func subtract(num1 float64, num2 float64) float64 {
	return num1 - num2
}

func multiply(num1 float64, num2 float64) float64 {
	return num1 * num2
}

func divide(num1 float64, num2 float64) float64 {
	return num1 / num2
}

func main() {

	var input string

	for true {
		fmt.Println("Type the operation: ")
		fmt.Scanf("%s", &input)

		if input != "" && (strings.Contains(input, "+") ||
			strings.Contains(input, "-") ||
			strings.Contains(input, "*") ||
			strings.Contains(input, "/")) {
			break
		}
	}

	var parts []string
	var result float64
	if strings.Contains(input, "+") {
		parts = strings.Split(input, "+")

		num1, _ := strconv.ParseFloat(parts[0], 8)
		num2, _ := strconv.ParseFloat(parts[1], 8)

		result = add(num1, num2)
	} else if strings.Contains(input, "-") {
		parts = strings.Split(input, "-")

		num1, _ := strconv.ParseFloat(parts[0], 8)
		num2, _ := strconv.ParseFloat(parts[1], 8)

		result = subtract(num1, num2)
	} else if strings.Contains(input, "*") {
		parts = strings.Split(input, "*")

		num1, _ := strconv.ParseFloat(parts[0], 8)
		num2, _ := strconv.ParseFloat(parts[1], 8)

		result = multiply(num1, num2)
	} else if strings.Contains(input, "/") {
		parts = strings.Split(input, "/")

		num1, _ := strconv.ParseFloat(parts[0], 8)
		num2, _ := strconv.ParseFloat(parts[1], 8)

		result = divide(num1, num2)
	} else {
		fmt.Println("Invalid operation provided...")
	}

	fmt.Println("Result: ", result)
}
