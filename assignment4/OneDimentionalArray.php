<?php
// 2) Write PHP code that:
//     1) declares an array of one dimension, initialize it to the following values:
//     (5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)
//     2) Print all elements of the array
//     3) Calculate and print total of all elements
//     4) Calculate and print total of even elements
//     5) Calculate and print total of odd elements
//     6) Find minimum element and its positions and
//     7) Find maximum element and its positions


function oneDimensional(){


//     1) declares an array of one dimension, initialize it to the following values:
//     (5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)
	$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);


	//     2) Print all elements of the array
	print_r($numbers);


	//     3) Calculate and print total of all elements
	$sum_arr = array_sum($numbers);
	echo "\n The sum of all elements of the array : $sum_arr";


	//     4) Calculate and print total of even elements
	$even_num_arr = [];
	foreach($numbers as $even_num){
		if($even_num % 2 == 0){
			array_push($even_num_arr,$even_num);
		}
	}
	echo("\n All even elements of the array : ");
	print_r($even_num_arr);
	$sum_even_num = array_sum($even_num_arr);
	echo("\n The sum of all even elements of the array : $sum_even_num");

	//     5) Calculate and print total of odd elements
	$odd_num_arr = [];
	foreach($numbers as $odd_num){
		if($odd_num % 2 !== 0 ){
			array_push($odd_num_arr,$odd_num);
		}
	}
	echo("\n All odd elements of the array : ");
	print_r($odd_num_arr);

	//     6) Find minimum element and its positions and

	$num_unique_arr = array_unique($numbers); // first removes duplicate elements in an array
	sort($num_unique_arr); // sorted as ascending order
	$min_num = min($numbers); // to get min elements in an array used for min()
	$min_num_indexpos = array_search($min_num, $numbers); //array_search used for search index position of an array
	echo("\nThe minmums of the array : $min_num \nThe Index Position : $min_num_indexpos");


	//     7) Find maximum element and its positions

	$max_num_arr_unique = array_unique($numbers); // first removes duplicate elements in an array
	sort($max_num_arr_unique); // sorted as ascending order
	$max_num_arr = max($max_num_arr_unique); // to get max elements in an array used for max()
	$max_num_indexpos  = array_search($max_num_arr,$max_num_arr_unique); //array_search used for search index position of an array
	echo("\nThe minmums of the array : $max_num_arr \nThe Index Position : $max_num_indexpos");


}

oneDimensional();



?>