<?php

function isPrime($number){
	if($number < 2){
		return false;
	}

	for($i = 2 ; $i <= sqrt($number); $i++){
		if($number % $i == 0 ){
			return true;
		}
	}
}

function primeNumber($number){
	$primeArr = [];

	for($i = 2; $i <= $number; $i++){
		if(isPrime($i)){
			$primeArr[] = $i;
		}
	}
	print_r($primeArr);
}

primeNumber(15);

function convertcelciustofarenheit($celcius){
	$farenheit = ($celcius*9/5)+32;
	echo("\nThe Farenheit : $farenheit °c");
}
convertcelciustofarenheit(32);

function farenheitToCelsius($farenheit){
	$celcius = ($farenheit - 32)*5/9;
	echo("\nThe Celcius : $celcius °f");
}
farenheitToCelsius(32);


function Divisible(){
	$i = 2;

	while($i <= 20){
		if($i % 3 == 0 ){
			echo "\n $i";
		}
		if($i == 15){
			break;
		}
		$i++;
	}

}
Divisible();
?>