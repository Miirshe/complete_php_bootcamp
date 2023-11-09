<?php

function oneDimensional($numArray){
	$oddNumber = [];
	$evenNumber = [];
	foreach($numArray as $number){
		if($number % 2 == 0 ){
			$evenNumber[] = $number;
		}else{
			$oddNumber[] = $number;
		}
	}

	echo("odd number : ");
	print_r($oddNumber);
	echo("\neven number : ");
	print_r($evenNumber);
	echo("\nThe total sum numbers : " . array_sum($numArray));
	echo("\nThe total sum even numbers : " . array_sum($evenNumber));
	echo("\nThe total sum odd numbers : " . array_sum($oddNumber));

}

$numbers = [1,2,3,4,5,6,7,8,9,10];
oneDimensional($numbers);
?>