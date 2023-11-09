<?php

function calculateLCM($num1 , $num2){

	$maxNumber = max($num1 , $num2);

	$lcm = $maxNumber;

	while($lcm % $num1 != 0 || $lcm % $num2 != 0){
		$lcm += $maxNumber;
	}
	return $lcm;
}
$num1 = 12;
$num2 = 18;

$lcmNumber = calculateLCM($num1,$num2);

echo("The lowest comman multiplier $num1 and $num2 : $lcmNumber")

?>