package main

import (
	"fmt"
)

// Function that calcualtes fibonacci sequence and when loop ends
// closes the channel.
func fibonacci(n int, c chan int) {
	x, y := 0, 1
	for i := 0; i < n; i++ {
		c <- x
		x, y = y, x+y
	}

	close(c)
}

func main() {
	// Create a chanel to receive integers with cap = 10
	c := make(chan int, 100)

	go fibonacci(cap(c), c)

	// With this loop we receive value from the channel repeatedly
	// unti a close event occures by the sender (fibonacci function).
	for i := range c {
		fmt.Println(i)
	}
}
