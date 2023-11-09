<?php

function calculateHCF($num1 , $num2){

	$minNumber = min($num1 , $num2);

	$hcf = $minNumber;

	while ($num1 % $hcf != 0 || $num2 % $hcf != 0){

		$hcf --;

	}

	return $hcf;
}

$num1 = 12;
$num2 = 18;

$HCFNumber = calculateHCF($num1 , $num2);
echo("The Highest Comman Factor $num1 and $num2 : $HCFNumber")

?>