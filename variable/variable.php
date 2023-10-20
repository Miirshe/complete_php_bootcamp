<?php

// $name = 'miirshe';

// echo 'Hi,'.$name;
// echo strlen('The Length of Name : '.strlen($name));
// echo 'The Reversed Word Is : '.strrev($name);
// echo 'The Word Position : '.strpos($name,'she')

// $quotes = ' “ Hard work beats talent when talent fails to work hard. ” ';
// print 'The Quotes Says to Me : '.$quotes;
// echo 'The Changin World : '.str_replace('work','doing',$quotes);
// echo 'The Word Count Quotes : '.str_word_count($quotes);

$num = 60;
// echo 'The number Is : '.$num
// echo 'Check the number is non decimal point '.is_int($num);
$num = -160;
// echo 'Positive number : '.abs($num);
$num = 64;
// echo 'The Square Root '.$num.' : '.sqrt($num);
$num = 67.980;
// echo 'Round number '.$num.' is : '.round($num);
$num = 12;
$pi_number = pi();
// echo 'Multiply '.$num.' * '.$pi_number.' : '.$num*$pi_number;
$num = rand(0,10);
// echo 'The Random Number Multiply by '.pi().' : '.$num*pi();

$lists = [1,2,3,4,5,6,7,8,9,10];
// print_r($lists);
foreach ($lists as $val){

	if($val !== 5 && $val !== 10 ){
		echo "\n".$val."\n";
		continue;
	}

}

echo "\n The Max Number : ".max($lists);
echo "\n The Min Number : ".min($lists);
echo "\n The Var_dump : ".var_dump($lists);

$quotes = [
	'“ Hard work beats talent when talent fails to work hard.” ',
	'“ If your dream is a big dream, and if you want your life to work on the high level you say you do, there’s no way around doing the work it takes to get you there. ”',
	'“ Success is no accident. It is hard work, perseverance, learning, studying, sacrifice, and most of all, love of what you are doing or learning to do. ”'
];
foreach ($quotes as $quote) {
	# code...
	echo $quote;
}



?>