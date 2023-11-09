<?php

function set_factorial_number($num){
	$factorial = 1;
	$i = 1;

	while($i <= $num){
		$factorial *= $i;
		$i++;
	}
	echo("The factorial number of $num is $factorial");
}

set_factorial_number(5);

function getNumbers(){
	for ($i = 20; $i >= 5; $i--) 
        if ($i % 2 == 0)
            continue;
        else
            echo ("$i, ");
}

getNumbers();

function AddNumbers(){
	
	$i = 3;
	do{
		print($i);
		$i+=2;
	}while($i<=10);

}

AddNumbers()

?>