package main

import (
	"fmt"
	"sync"
	"time"
)

func process1(wgrp *sync.WaitGroup) {
	time.Sleep(100 * time.Millisecond)
	fmt.Println("\nProcess 1 done...")
	wgrp.Done()
}

func process2(wgrp *sync.WaitGroup) {
	time.Sleep(1000 * time.Millisecond)
	fmt.Println("\nProcess 2 done...")
	wgrp.Done()
}

func main() {
	var wg sync.WaitGroup
	wg.Add(2) // Wait for 2 processes.

	go process1(&wg)
	go process2(&wg)

	fmt.Println("\nProcess 3 done...")
	wg.Wait()
}
