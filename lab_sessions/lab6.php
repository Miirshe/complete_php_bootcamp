<?php
function examResult (){
	$examResult = array(
		array(101,"Abdikafi Isse Isak",100,96,94),
		array(102,"Younis Mohamed Abukar",100,99,98),
		array(103,"Zakariye Mohamed Jimale",100,97,95),
		array(104,"miirshe",100,97,95),
	);
	$total = 0;
	$average = 3;
	$arr_marks = [];
	foreach($examResult as $key){
		foreach(array_splice($key,2) as $val){
			$total += $val;
		}
		$arr_marks[] =$total/$average;
	}

	print_r($arr_marks);
}

examResult()

?>