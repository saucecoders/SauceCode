<?php 

	$serverName = 'localhost';
	$uname = 'root';
	$pswd = '';
	$dbname = 'saucedb';

	$conn = mysqli_connect($serverName, $uname, $pswd, $dbname);

	if(!$conn){
		die("Connection Failed:" . mysqli_connect_error());
	}