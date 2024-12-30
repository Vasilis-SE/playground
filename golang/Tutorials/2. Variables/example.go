package main

import "fmt"

func main() {

	// Static types: Types are defined.

	// Integers
	var intVar1 uint8 = 2
	var intVar2 uint16 = 1345
	var intVar3 uint32 = 1435345
	var intVar4 uint64 = 112321
	var intVar5 int8 = 14
	var intVar6 int16 = 11
	var intVar7 int32 = 133
	var intVar8 int64 = 14325465243

	fmt.Printf("\n\n ----------- Integer Types ------------- \n\n")

	fmt.Printf("intVar1 is an integer of type %T and value: %d \nUnsigned integers (0 to 255) \n\n", intVar1, intVar1)
	fmt.Printf("intVar2 is an integer of type %T and value: %d \nUnsigned integers (0 to 65535) \n\n", intVar2, intVar2)
	fmt.Printf("intVar3 is an integer of type %T and value: %d \nUnsigned integers (0 to 4294967295) \n\n", intVar3, intVar3)
	fmt.Printf("intVar4 is an integer of type %T and value: %d \nUnsigned integers (0 to 18446744073709551615) \n\n", intVar4, intVar4)
	fmt.Printf("intVar5 is an integer of type %T and value: %d \nSigned integers (-128 to 127) \n\n", intVar5, intVar5)
	fmt.Printf("intVar6 is an integer of type %T and value: %d \nSigned integers (-32768 to 32767) \n\n", intVar6, intVar6)
	fmt.Printf("intVar7 is an integer of type %T and value: %d \nSigned integers (-2147483648 to 2147483647) \n\n", intVar7, intVar7)
	fmt.Printf("intVar8 is an integer of type %T and value: %d \nSigned integers (-9223372036854775808 to 9223372036854775807) \n\n", intVar8, intVar8)

	// Float
	var floatVar1 float32 = 1.2
	var floatVar2 float64 = 11.2321
	var floatVar3 complex64 = 12.2432
	var floatVar4 complex128 = 321.2232

	fmt.Printf("\n\n ----------- Float Types ------------- \n\n")
	fmt.Printf("floatVar1 is a float of type %T and value: %f \nIEEE-754 32-bit floating-point numbers \n\n", floatVar1, floatVar1)
	fmt.Printf("floatVar2 is a float of type %T and value: %f \nIEEE-754 64-bit floating-point numbers \n\n", floatVar2, floatVar2)
	fmt.Printf("floatVar3 is a float of type %T and value: %f \nComplex numbers with float32 real and imaginary parts \n\n", floatVar3, floatVar3)
	fmt.Printf("floatVar4 is a float of type %T and value: %f \nComplex numbers with float64 real and imaginary parts \n\n", floatVar4, floatVar4)

	// Boolean
	fmt.Printf("\n\n ----------- Boolean Types ------------- \n\n")
	var booleanVar1 bool = false
	fmt.Printf("booleanVar1 is a boolean of type %T and value: %t \n", booleanVar1, booleanVar1)

	// Dynamic types: Types are not defined and the compiler need to interpret their type instead.
	fmt.Printf("\n\n ----------- Dynamic Variables ------------- \n\n")
	var x float64 = 20.0
	y := 42
	fmt.Printf("x is of type %T\n", x)
	fmt.Printf("y is dynamic of type %T\n", y)

	fmt.Printf("\n\n ----------- Mixed Variable Declaration ------------- \n\n")
	var a, b, c = 3, 4, "foo"
	fmt.Printf("a is of type %T and value %d \n", a, a)
	fmt.Printf("b is of type %T and value %d \n", b, b)
	fmt.Printf("c is of type %T and value %s \n", c, c)

}
