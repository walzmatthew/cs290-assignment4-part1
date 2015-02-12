<?php
//error reporting. comment out once code is working
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//destroy $_SESSION
session_start();
$_SESSION = array();
session_destroy();

//redirect to login.php
$redirect = "http://web.engr.oregonstate.edu/~walzma/login.php";
header("Location: $redirect", true);
die();

?>