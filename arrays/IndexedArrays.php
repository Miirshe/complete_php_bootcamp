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

?>