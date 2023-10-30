<?php
// 1.0.Write PHP program that converts positive hexadecimal integer number into Binary
function hexToBinary($hexDigit){
	$binaryNumber = '';
	switch(strtoupper($hexDigit)){
		case '0':
			$binaryNumber = '0000';
			break;
		case '1':
			$binaryNumber = '0001';
			break;
		case '2':
			$binaryNumber = '0010';
			break;
		case '3':
			$binaryNumber = '0011';
			break;
		case '4':
			$binaryNumber = '0100';
			break;
		case '5':
			$binaryNumber = '0101';
			break;
		case '6':
			$binaryNumber = '0110';
			break;
		case '7':
			$binaryNumber = '0111';
			break;
		case '8':
			$binaryNumber = '1000';
			break;
		case '9':
			$binaryNumber = '1001';
			break;
		case 'A':
			$binaryNumber = '1010';
			break;
		case 'B':
			$binaryNumber = '1011';
			break;
		case 'C':
			$binaryNumber = '1100';
			break;
		case 'D':
			$binaryNumber = '1101';
			break;
		case 'E':
			$binaryNumber = '1110';
			break;
		case 'F':
			$binaryNumber = '1111';
			break;
		default:
		echo("invalid binary number");
		return; 

	}
	return $binaryNumber;
}

function binary($hexNumber){
	$binaryNumber = '';
	$hexDigit = str_split($hexNumber);
	foreach($hexDigit as $hexValue){
		$binaryNumber .=  hexToBinary($hexValue).',';
	}
	return $binaryNumber;
}

$binaryNumber = binary('145A');

echo("The Binary Number : $binaryNumber")

?>