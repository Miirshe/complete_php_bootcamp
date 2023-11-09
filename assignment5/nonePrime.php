<?php


function isPrime($number){
	if($number < 2){
		return false;
	}

	for($i = 2 ; $i <= sqrt($number); $i++){

		if ($number % $i == 0 ){
			return false;
		} 
		return true;
	}
}
function nonePrime($num1 , $num2){
	$NonePrime = [];

	for($i = $num1 ; $i <= $num2 ; $i++){
		if(isPrime($i)){
			$NonePrime[] = $i;
		}
	}

	return $NonePrime;
	
}
$NonePrime = nonePrime(2 , 100);
echo "The None Prime : ".implode(" ",$NonePrime);



?>