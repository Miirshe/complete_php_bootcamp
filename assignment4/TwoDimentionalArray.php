<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./TwoDimentionalArray.css">
	<title>Two dimentional array with associative</title>
</head>

<?php     
    // 4) Write a program that declares an associative array of two dimensions where 
	// row names are Light, Normal, and Dark, column names are Red, Green, Blue, 
	// array elements are shown in the intersections of rows and columns, 
	// then print array elements as shown in the table below
	$systemLight = array(
		"Light" => array(
			"Red" => "Light Red",
			"Green" => "Light Green",
			"Blue" => "Light Blue"
		),
		"Normal" => array(
			"Red" => "Normal Red",
			"Green" => "Normal Green",
			"Blue" => "Normal Blue"
		),
		"Dark" => array(
			"Red" => "Dark Red",
			"Green" => "Dark Green",
			"Blue" => "Dark Blue"
		)
	);
    
    ?>

<body>

<div class="main">

        <?php
        echo "<table>";
        echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
        foreach ($systemLight as $rowName => $row) {
            echo "<tr><td>$rowName</td>";
            foreach ($row as $columnName => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
	
</div>

</body>
</html>