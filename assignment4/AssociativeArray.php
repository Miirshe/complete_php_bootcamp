<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./AssociativeArray.css">
	<title>Associative Array</title>
</head>

<?php
    // 3) Write PHP program that
    //     1) declares one dimensional associative array with the f
    // 	ollowing indexes and their values
    // 	2) Print array indexes as well as their values as shown in the above table

	$myProfile = array(
		"Id" => 1,
		"Name" => "Abdikafi Isse Isak",
		"Phone" => 618302314,
		"Dob" => "27-10-2023",
		"Sex" => "male"
	);
    
    ?>
<body>
	<div class="main">

	<table border="2px solid">
		<thead>
			<tr>
				<th class="t_title">Index</th>
				<?php

				foreach($myProfile as $key => $value){
					echo("<th>$key</th>");
				}
				?>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th class="t_title">Value</th>
			    <?php 
				foreach($myProfile as $key => $value){
					echo("<td>$value</td>");
				}
			    ?>
			</tr>
		</tbody>
	</table>
		
	</div>

    
	
</body>
</html>
