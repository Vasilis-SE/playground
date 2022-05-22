package main

import (
	"errors"
	"fmt"
)

func division(numerator float64, denominator float64) (float64, error) {
	if denominator == 0 {
		return 0, errors.New("Math error: Cannot devide by zero!!!")
	}

	return numerator / denominator, nil
}

func main() {

	result, err1 := division(10, 2)
	if err1 != nil {
		fmt.Println(err1)
	} else {
		fmt.Println(result)
	}

	result, err2 := division(213123, 3432432232)
	if err2 != nil {
		fmt.Println(err2)
	} else {
		fmt.Println(result)
	}

	result, err3 := division(43, 0)
	if err3 != nil {
		fmt.Println(err3)
	} else {
		fmt.Println(result)
	}
}
