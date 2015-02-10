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
if(isset($_GET['min-multiplicand'])) {//min-multiplicand in query string
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
if(isset($_GET['max-multiplicand'])) {//max-multiplicand in query string
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
if(isset($_GET['min-multiplier'])) {//min-multiplicand in query string
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
if(isset($_GET['max-multiplier'])) {//max-multiplier in query string
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
	
echo '</body>
</html>';
?>