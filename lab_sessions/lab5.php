<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>👨‍💻Lab 5 Sessions</title>
</head>
<body>
	<?php
	$colors = array(
		array(
			"Light" => array(
				"Light blue" , "Light green", "Light orange"
			)
		),
			array(
				"Normal" => array(
					"Normal blue" , "Normal green", "Normal orange"
			)
		),

	)
	?>

	<table>
		<?php 
		foreach($colors as $key => $value){
			echo("<tbody><tr><th>$value</th></tr></tbody>");
			foreach($value as $color){
				echo("<tbody><tr><td>$color</td></tr></tbody>");
			}
		}
		?>
	</table>
	
</body>
</html>