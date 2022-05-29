package main

import "fmt"

func main() {
	var a int = 10
	var arr = [3]int{10, 20, 30}

	var a_p *int
	var arr_p *[3]int
	a_p = &a
	arr_p = &arr

	fmt.Printf("\n --------- Initial Values --------- \n")

	fmt.Printf("Address of variable a: %x\n", &a)
	fmt.Printf("Address of variable arr: %x\n", &arr)

	fmt.Printf("Address stored in pointer a_p: %x\n", a_p)
	fmt.Printf("Address stored in pointer arr_p: %x\n", arr_p)

	fmt.Printf("Value that the pointer pointer a_p points at is: %d\n", *a_p)
	fmt.Printf("Value that the pointer pointer arr_p points at is: %d\n", *arr_p)

	fmt.Printf("\n --------- Changing Initial Values --------- \n")

	a = 24
	arr = [3]int{40, 50, 60}

	fmt.Printf("Address of variable a: %x\n", &a)
	fmt.Printf("Address of variable arr: %x\n", &arr)

	fmt.Printf("Address stored in pointer a_p: %x\n", a_p)
	fmt.Printf("Address stored in pointer arr_p: %x\n", arr_p)

	fmt.Printf("Value that the pointer pointer a_p points at is: %d\n", *a_p)
	fmt.Printf("Value that the pointer pointer arr_p points at is: %d\n", *arr_p)

}
