<?php
//error reporting code
error_reporting(E_ALL);
ini_set('display_errors', 1);

//create empty array to hold request type and value pairs
$requests = array();

//check if GET or POST request received
//GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') { //if GET type request received
	$requests['Type'] = 'GET'; //set Type to GET in $requests
	if (count($_GET) > 0) { //if at least 1 value/pair received
	    foreach ($_GET as $key => $value) { //iterate through each key/value pair in GET array
		    $requests['parameters'][$key] = $value; //save value pairs in $requests['parameters']
	    }
	}
	else { //0 value/pairs received
	    $requests['parameters'] = 'null';
	}
	echo json_encode($requests);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //if POST type request received
	$requests['Type'] = 'POST'; //set Type to POST in $requests
	if (count($_POST) > 0) { //if at least 1 value/pair received
	    foreach ($_POST as $key => $value) { //iterate through each key/value pair in POST array
		    $requests['parameters'][$key] = $value; //save value pairs in $requests['parameters']
	    }
	}
	else { //0 value/pairs received
	    $requests['parameters'] = 'null';
	}
	echo json_encode($requests);
}
?>