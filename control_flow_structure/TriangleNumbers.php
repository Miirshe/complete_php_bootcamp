<?php
// Challenge 3: Number Triangle
// Write a program that prints the following number triangle pattern:
function trianle_numbers($num){

	for($i = 1; $i <= $num; $i++){

		for($j = 1; $j <= $i; $j++){
			print("$i");
		}
		print("\n");
	}

}

trianle_numbers(5);

?>