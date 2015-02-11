<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Multiplication Table</title>
</head>
<body>';


//Error check input GET values and create a table if values are appropriate
$good_inputs = true;
$check_multiplicand = true;
$check_multiplier = true;

//Check that each value is provided in GET call and the value is an integer
//min-multiplicand check
if (isset($_GET['min-multiplicand'])) {//min-multiplicand in query string
	if(!($_GET['min-multiplicand'] === (string)(int)$_GET['min-multiplicand'])) {//check if query string contains an integer and only an integer. Check similar to one found in comment from Boylett at http://us2.php.net/manual/en/function.is-float.php
		$good_inputs = false;
		$check_multiplicand = false;
		echo 'min-multiplicand must be an integer.<br>';
	}
}
else {//no min-multiplicand
    $good_inputs = false;
	$check_multiplicand = false;
	echo 'Missing parameter min-multiplicand.<br>';
}

//max-multiplicand check
if (isset($_GET['max-multiplicand'])) {//max-multiplicand in query string
	if(!($_GET['max-multiplicand'] === (string)(int)$_GET['max-multiplicand'])) {//check if query string contains an integer and only an integer. Check similar to one found in comment from Boylett at http://us2.php.net/manual/en/function.is-float.php
		$good_inputs = false;
		$check_multiplicand = false;
		echo 'max-multiplicand must be an integer.<br>';
	}
}
else {//no max-multiplicand
    $good_inputs = false;
	$check_multiplicand = false;
	echo 'Missing parameter max-multiplicand.<br>';
}
	
//min-multiplier check
if (isset($_GET['min-multiplier'])) {//min-multiplicand in query string
	if(!($_GET['min-multiplier'] === (string)(int)$_GET['min-multiplier'])) {//check if query string contains an integer and only an integer. Check similar to one found in comment from Boylett at http://us2.php.net/manual/en/function.is-float.php
		$good_inputs = false;
		$check_multiplier = false;
		echo 'min-multiplier must be an integer.<br>';
	}
}
else {//no min-multiplier
    $good_inputs = false;
	$check_multiplier = false;
	echo 'Missing parameter min-multiplier.<br>';
}

//max-multiplier check
if (isset($_GET['max-multiplier'])) {//max-multiplier in query string
	if(!($_GET['max-multiplier'] === (string)(int)$_GET['max-multiplier'])) {//check if query string contains an integer and only an integer. Check similar to one found in comment from Boylett at http://us2.php.net/manual/en/function.is-float.php
		$good_inputs = false;
		$check_multiplier = false;
		echo 'max-multiplier must be an integer.<br>';
	}
}
else {//no max-multiplier
    $good_inputs = false;
	$check_multiplier = false;
	echo 'Missing parameter max-multiplier.<br>';
}

//Check that min [multiplicand|multiplier] is less than max [multiplicand|multiplier]
//multiplicand check
if ($check_multiplicand) { //true if both min and max multiplicands are integers
    if ($_GET['min-multiplicand'] > $_GET['max-multiplicand']) {
	    $good_inputs = false;
		echo 'Minimum multiplicand larger than maximum.<br>';
	}
}

//multiplier check
if ($check_multiplier) { //true if both min and max multipliers are integers
    if ($_GET['min-multiplier'] > $_GET['max-multiplier']) {
	    $good_inputs = false;
		echo 'Minimum multiplier larger than maximum.<br>';
	}
}

//Create multiplication table is all inputs are received and all inputs are valid
if ($good_inputs) { //true if all inputs have been received and all are integers
    $rows = (int)$_GET['max-multiplicand'] - (int)$_GET['min-multiplicand'] + 1;
	$cols = (int)$_GET['max-multiplier'] - (int)$_GET['min-multiplier'] + 1;
	//create table object in html
    echo '<table border="1">
	<caption>Multiplication Table</caption>
	<tbody>
	<tr>
	<th></th>';
	//create first row starting with a blank and then min-multiplicand, min-multiplicand + 1, ..., max-multiplicand		
	for ($i = 0; $i < $cols; $i++) {
	    $cell = (int)$_GET['min-multiplier'] + $i;
	    echo "<th>$cell</th>";
	}
	echo '</tr>';
	//create subsequent rows with imbedded for loops
	for ($i = 0; $i < $rows; $i++) {//in each row
	    $row_value = (int)$_GET['min-multiplicand'] + $i; //calculate row multiplicand
		echo "<tr>
		<th>$row_value</th>"; //create row place this value in first column
		for ($j = 0; $j < $cols; $j++) {//iterate through each column in the row
		    $col_value = (int)$_GET['min-multiplier'] + $j; //calculate column multiplier
			$cell = $row_value * $col_value; //calculate product for value of cell
			echo "<td>$cell</td>"; //place product in cell
		}
		echo '</tr>'; //end row
	}
	echo '</tbody>
	</table>';
}	

echo '</body>
</html>';
?>