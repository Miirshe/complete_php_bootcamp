<?php
// array sorted 
function array_sorted(){

	// array sorted 
	$numbers = [1,4,3,3,4,2,4,5,0];
	sort($numbers);
	foreach($numbers as $num){
		echo ("\n The Number : $num");
	}

	// array sorted & array_unique
	$unique_numbers = array_unique($numbers);
	sort($unique_numbers);
	foreach($unique_numbers as $num){
		echo("\n The Unique Number : $num");
	}

	// array_reversed
	echo("\nThe array_reverse");
	print_r(array_reverse($unique_numbers));

	// rsorted reversed our array
	rsort($numbers);
	echo("\nThe array_reverse");
	print_r($numbers);

	// in_array
	rsort($numbers);
	$num = 5;
	if(in_array($num,$numbers)){
		echo "\n $num value already exist in_array";
	}else{
		echo "\n $num Not exist in_array";
	}

	
}
array_sorted();

function array_push_values($nums){
	// created array
	$arr_nums = [1,2,4];

	//add value at the end by using array_push
	array_push($arr_nums,$nums);

	// sort arr_nums of array as ascending order (a-z)
	sort($arr_nums);

	echo("\n");

	print_r($arr_nums[3][5]);

}

array_push_values([5,6,7,8,9,10]);

function array_unshift_values($nums){

	//created array of numbers
	$numbers = [5,6,7,8,9,10];

	//added values at first of an element by using array_unshift 
	array_unshift($numbers,$nums);

	// sorted number of arrays
	rsort($numbers);

	echo("\n array_unshift : ");
	print_r($numbers);

}

array_unshift_values(0);
array_unshift_values([0,1,2,3,4]);

function array_pop_value(){

	$numbers = [1,2,3,4,5,6,7,8,9,10];

	$num_pop = array_pop($numbers);

	sort($numbers);

	echo("\n The remain values : ");

	print_r($numbers);

	echo("\n The Pop value : $num_pop");

}

array_pop_value();

function array_shift_value(){

	$numbers = [0,1,2,3,4,5,6,7,8,9,10];

	sort($numbers);

	$num_shift = array_shift($numbers);

	echo("\n The Remainder Values : ");
	print_r($numbers);
	echo("\n The Shift Value : $num_shift");

}

array_shift_value();

?>