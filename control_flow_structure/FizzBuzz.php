<?php

// Challenge 1: FizzBuzz
// Write a program that prints the numbers from 1 to 100. 
// But for multiples of three, print "Fizz" instead of the number, 
// and for multiples of five, print "Buzz". For numbers that are multiples of both 
// three and five, print "FizzBuzz".

function fizzbuzz($num){
	$i = 0;
	while($i <= $num){
		if($i % 3 == 0 ){
			echo("\n Fizz");
		}elseif($i % 5 == 0){
			echo("\n Buzz");
		}else{
			echo("\n FizzBuzz");
		}
		$i++;
	}
}

fizzbuzz(100);

?>
