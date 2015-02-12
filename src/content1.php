<?php
//error reporting. comment out once code is working
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

//check if $_POST['username'] exists. If yes, set $_SESSION['logged_in'] and $SESSION['name']
if (isset($_POST['username'])) {
    $_SESSION['logged_in'] = true;
	$_SESSION['username'] = $_POST['username'];
}

//check if $_SESSION['logged_in'] is set. If not, redirect to login.php
if (!isset($_SESSION['logged_in'])) { //code adapted from lecture "PHP Sessions"
	$redirect = "http://web.engr.oregonstate.edu/~walzma/login.php";
	header("Location: $redirect", true);
	die();
}

//following logged_in check and possible redirection (to avoid header conflict) create HTML document
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Multiplication Table</title>
</head>
<body>
<p>';
    
//check if $_SESSION['username'] is a valid entry
if (($_SESSION['username'] === "") || ($_SESSION['username'] === null)) { //not a valid username
    $login = "http://web.engr.oregonstate.edu/~walzma/login.php";
    echo "A username must be entered. Click <a href=$login>here</a> to return to the login screen.</p>";
}
else { //valid username
	if (!isset($_SESSION['visits'])) { //page has not been visited before
	    $_SESSION['visits'] = 0;
	}
	else { //page has been visited before
	    $_SESSION['visits']++; //increment page visit counter
	}
	$logout = "http://web.engr.oregonstate.edu/~walzma/logout.php";
	$content2 = "http://web.engr.oregonstate.edu/~walzma/content2.php";
	echo "Hello $_SESSION[username] you have visited this page $_SESSION[visits] times before. Click <a href=$logout>here</a> to logout.<br></br><a href=$content2>Link</a> to content2.php";
}

//close HTML document
echo '</body>
</html>';
?>