<?php
// 1.1.Write PHP program that converts positive hexadecimal integer number into Decimal
// Function to convert hexadecimal digit to binary
function hexDecimalNumber($hexDigit){
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
            echo('Invalid Hexadecimal number');
            break;
    }

    return $binaryNumber;
}

// Function to convert hexadecimal number to binary
function binaryNumber($hexNumber){
    $binaryNumber = '';
    $hexDigit = str_split($hexNumber);

    foreach($hexDigit as $hexValue){
        $binaryNumber .= hexDecimalNumber($hexValue);
    }

    return $binaryNumber;
}

// Function to convert binary number to decimal
function decimalNumber($binaryNumber){
    $decimal = 0;
    $length = strlen($binaryNumber);

    for ($i = 0; $i < $length; $i++) {
        $decimal += (int)$binaryNumber[$i] * pow(2, ($length - $i - 1));
    }

    return $decimal;
}

$hexNumber = '1A5';
$binaryNumber = binaryNumber($hexNumber);
echo("The Hexadecimal Number: $hexNumber\n");
echo("The Binary Number: $binaryNumber\n");
$decimalNumber = decimalNumber($binaryNumber);
echo("The Decimal Number: $decimalNumber\n");
?>