<?php
session_start();

include('connection.php');
include('function.inc.php');

$fname = $_POST['fname'];
$birthdate = $_POST['bdate'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];


if (empty($fname) OR empty($birthdate) OR empty($gender) OR empty($email) OR empty($pswd)) {
	$_SESSION['registerErr'] = "empty";
	header('Location: register.php');
	exit();
}

if (checkEmailExist($conn, $email)) {
	$_SESSION['registerErr'] = "emailExist";
	header('Location: register.php');
	exit();
}

//check register information
if (registerSuccess($conn, $fname, $birthdate, $gender, $email, $pswd)) {
	$_SESSION['registerErr'] = "success";
	header('Location: register.php');
	exit();
}else{
	$_SESSION['registerErr'] = "error";
	header('Location: register.php');
	exit();
}


 ?>