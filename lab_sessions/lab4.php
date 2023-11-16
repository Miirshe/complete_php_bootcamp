<?php 

function DivisibleBy5(){
	$i = 2;
	$total = 0;
	while($i <= 20 ){

		if($i % 5 == 0){
			$total += $i;
		}
		$i++;
	}

	echo $total;
}

DivisibleBy5();


function DivisibleBy3(){
	$i = 1;
	while($i <= 30){
		if($i % 3 == 0){
			echo("$i ,");
		}
		$i++;
	}
	# 3 , 6 , 9 , 12 , 15 , 18 , 21 , 27 , 30 
}

DivisibleBy3();


function EvenNumber(){
	$numbers = [5,3,8,0,4,1,7,2,9];
	sort($numbers);
	foreach($numbers as $number){
		if($number % 2 == 0 ){
			# 8,4,2
			echo("\n$number ,");
		}
	}
}

EvenNumber();


function CompareNumbers(){
	$num1 = 51;
	$num2 = 10;
	$num3 = 14;
	if($num1 > $num2 && $num1 > $num3){
		if($num2 > $num3 ){
			echo("\nThe Max : $num1 \nThe Min : $num3");
		}else{
			echo("\nThe Max : $num1 \nThe Min : $num2");
		}
	}elseif($num2 > $num1 && $num2 > $num3){
		if($num1 > $num3){
			echo("\nThe Max : $num2 \nThe Min : $num3");
		}else{
			echo("\nThe Max : $num2 \nThe Min : $num1");
		}
	}elseif($num3 > $num1 && $num3 > $num2){
		if($num1 > $num2){
			echo("\nThe Max : $num3 \nThe Min : $num2");
		}else{
			echo("\nThe Max : $num3 \nThe Min : $num1");
		}
	}
}

CompareNumbers();

function Multiplicationtable(){
	for($i = 1; $i <= 12; $i++) {
		for($j = $i; $j <= $i; $j++){
			echo ("\n $i * $j = ".$i*$j);
		}
	}
}

Multiplicationtable();

function ManipulateArray(){
	$arr = array(12,2,8,13,11,10,5,7,9,20,32,52,4,41,52);
	echo("\nArray Data : ");
	print_r($arr);
	$sum_arr = array_sum($arr);
	echo("\nsum_arr : $sum_arr");
}
ManipulateArray();

function lcm(){
	$maxNumber = max(6,8);
	$lcm = $maxNumber;
	while($lcm % 6 != 0 || $lcm % 8 != 0){
		$lcm += $maxNumber;
	}
	return $lcm;
}
$least_number = lcm();
echo("\nThe least number : $least_number");
?>