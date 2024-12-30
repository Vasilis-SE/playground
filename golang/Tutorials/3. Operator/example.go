package main

import "fmt"

func main() {

	// Arithmentic operators
	var a int = 14
	var b int = 3

	fmt.Printf("\nArithmetic operators:\n")
	fmt.Printf("Initial numbers: %d, %d \n", a, b)

	fmt.Printf("\nOperations:\n")
	fmt.Printf("  > Addition: %d \n", (a + b))
	fmt.Printf("  > Subtract: %d \n", (a - b))
	fmt.Printf("  > Multiplication: %d \n", (a * b))
	fmt.Printf("  > Division: %f \n", (float64(a) / float64(b)))
	fmt.Printf("  > Modulus: %d \n", (a % b))

	// Logical operators
	fmt.Printf("\nLogical operators:\n")
	if a > b {
		fmt.Printf("%d > %d\n", a, b)
	} else {
		fmt.Printf("%d < %d\n", a, b)
	}

	// Bitwise operators
	a = 60
	b = 14

	fmt.Printf("\nBitwise operators:\n")
	fmt.Printf("Initial values: %b, %b \n", a, b)

	fmt.Printf("&: %b\n", (a & b))
	fmt.Printf("|: %b\n", (a | b))
	fmt.Printf("^: %b\n", (a ^ b))

}
