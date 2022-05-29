package main

import "fmt"

func main() {

	for i := 0; i < 10; i++ {
		fmt.Printf("%d | ", i)
	}

	var i int = 1
	for true {
		i += i
		fmt.Printf("%d \n", i)
		if i > 1000000 {
			break
		}
	}
}
