package main

import (
	"fmt"
	"time"
)

func process1() {
	time.Sleep(100 * time.Millisecond)
	fmt.Println("\nProcess 1 done...")
}

func process2() {
	time.Sleep(1000 * time.Millisecond)
	fmt.Println("\nProcess 2 done...")
}

func main() {
	go process1()
	go process2()
	fmt.Println("\nProcess 3 done...")
}
