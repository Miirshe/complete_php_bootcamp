<?php

function oddNumber($number) {
	$oddNumber = [];
    # naming loop variable
	$i = 1;
	# loop-continuation-condition
	while($i <= $number) {
		# check if the number is odd 
		if($i % 2 != 0){
			# add odd number into the oddNumber array
			$oddNumber[] = $i;
		}
		$i++;
	}
	echo "The Odd Number : ";
	print_r($oddNumber);
}
oddNumber(15);

function evenNumber($number){
	$evenNumber = [];
	$i = 2;
	while($i <= $number){
		if($i % 2 == 0){
			$evenNumber[] =$i;
		}
		$i++;
	}
	echo "\nThe Even number are : ";
	print_r($evenNumber);
}
evenNumber(15);


function factorialNumbers($number){
	$factorial = 1;
	$i = 1;
	while($i <= $number){
		$factorial *= $i;
		$i++;
	}
	echo $factorial;
}
factorialNumbers(5);

function IsprimeNumber($number){
	if($number <= 2){
		return false;
	}

	for($i =2; $i <= sqrt($number); $i++){

		if($number % $i == 0){
			return true; 
		}
	}
}
function PrimeNumber($number){

	$primeNumbers = [];

	for($i = 2; $i <= $number; $i++){

		if(IsprimeNumber($i)){
			$primeNumbers[] = $i; 
		}
	}
	return $primeNumbers;
}
$primeNumber = PrimeNumber(15);
echo "\nThe Prime Number : ";
print_r($primeNumber);
?>