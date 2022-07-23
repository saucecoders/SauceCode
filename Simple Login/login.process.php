<?php
session_start();

include('connection.php');
include('function.inc.php');

$email = $_POST['email'];
$pswd = $_POST['pswd'];

//check inputs value
if ($email == '' OR $pswd == '') {
	$_SESSION['loginErr'] = "empty";
	header('Location: login.php');
	exit();
}

//check login information
if (!checkLogin($conn, $email, $pswd)) {
	$_SESSION['loginErr'] = "notExist";
	header('Location: login.php');
	exit();
}


 ?>