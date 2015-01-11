Integer value shortener
=======================

This is an integer value shortener into a string-like value, including a decoding method for retieving the original value. Basically the script only transform numbers between base-10 positional notation and any positional numeral system provided; list of allowed characters needs to be provided with funciton calls.

## Character set

The only limitation on character set provided is uniqueness of a character within a set (otherwise the decoding into base-10 notation is not possible).

## Examples

Following examples are using all numbers and case-sensitive latin letters as character set, i.e., base-62 notation.

	Character set being used:
		0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ

	Input number: 1256205909 
	Shortened output: 1n0UxD 
	Reverse check: 1256205909 

    Input number: 1396059841 
    Shortened output: 1wtIWd 
    Reverse check: 1396059841 

	Input number: 1726829042 
	Shortened output: 1SRB7k 
	Reverse check: 1726829042 
	
	Input number: 329437870 
	Shortened output: mihQ2 
	Reverse check: 329437870 
	
	Input number: 2107777486 
	Shortened output: 2iE1d4 
	Reverse check: 2107777486 
	
	Input number: 224550586 
	Shortened output: fcbRE 
	Reverse check: 224550586 

## Disclaimer

The code was originally written several years ago **:-)**