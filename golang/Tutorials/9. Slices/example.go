package main

import "fmt"

func main() {
	fmt.Printf("\n---------------------\n")
	fmt.Printf("\n\nBasic \n\n")

	var n1 []int
	n1 = make([]int, 5, 10)
	fmt.Printf("\nInitialized array with length of 5 and a max cap size of 10:\n")
	printSliceOfArray(n1)

	var n2 []int
	fmt.Printf("Non initialized array:\n")
	printSliceOfArray(n2)

	// Subslicing
	fmt.Printf("\n\nSubslicing \n\n")
	n3 := []int{0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15}
	fmt.Printf("Initial Array: %v\n", n3)
	fmt.Printf("From 2nd element to 4th: %v\n", n3[1:4])
	fmt.Printf("From begging till the 8th: %v\n", n3[:8])
	fmt.Printf("From the 8th till the end: %v\n", n3[8:])

	// Append & Copy
	fmt.Printf("\n\nAppend & Copy \n\n")
	var n4 []int
	n4 = append(n3, 16)
	printSliceOfArray(n4)

	n4 = append(n4, 17, 18, 19)
	printSliceOfArray(n4)

	n1s1 := make([]int, len(n4), (cap(n4))*2)
	printSliceOfArray(n1s1)
	copy(n1s1, n3[:8])
	printSliceOfArray(n1s1)

}

func printSliceOfArray(numbers []int) {
	fmt.Printf("len=%d cap=%d slice=%v\n\n", len(numbers), cap(numbers), numbers)
}
