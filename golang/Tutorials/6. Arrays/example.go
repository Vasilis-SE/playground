package main

import (
	"fmt"
	"strings"
)

func main() {

	// Single line array initialization & assignment
	var message_arr = []string{"This", "is", "a", "simple", "message"}
	fmt.Println(strings.Join(message_arr, " "))

	// Multi line array initialization & assignment. The number of cells
	// cannot exceed the max size when initializing.
	var balance [10]float32
	balance[0] = 2.3
	balance[1] = 5.52
	balance[2] = 6.4
	balance[3] = 31.743
	fmt.Println(balance)

	var n [100]int
	var i int

	for i = 0; i < 100; i++ {
		if i == 0 {
			n[i] = i
		} else {
			n[i] = i + n[i-1]
		}
	}
	fmt.Println(n)
}
