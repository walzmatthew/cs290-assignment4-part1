<?php
//error reporting. comment out once code is working
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

//check if $_SESSION['logged_in'] is set. If not, redirect to login.php
if (!isset($_SESSION['logged_in'])) { //code adapted from lecture "PHP Sessions"
	$filepath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filepath = implode('/', $filepath);
	$redirect = "http://web.engr.oregonstate.edu/~walzma/login.php";
	header("Location: $redirect", true);
	die();
}

//following logged_in check and possible redirection (to avoid header conflict) create HTML document with link to content1.php
$content1 = "http://web.engr.oregonstate.edu/~walzma/content1.php";
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\" />
<title>PHP Multiplication Table</title>
</head>
<body>
<p>
<a href=$content1>Link</a> to content1.php
</p>
</body>
</html>";
?>