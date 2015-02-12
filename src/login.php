<?php
//error reporting. comment out once code is working
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//create HTML document with POST form asking for a username in the body
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Login Page</title>
</head>
<body>
<form action="http://web.engr.oregonstate.edu/~walzma/content1.php" method="post">
<h1>Login Form</h1>
<div>
<label>Please enter your username: </label>
<input type="text" name="username">
</div>
<div>
<button>Login</button>
</div>
</body>
</html>';
?>