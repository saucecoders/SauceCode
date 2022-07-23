<?php

function checkEmailExist($conn, $email){
	$sql = "SELECT * FROM usertbl WHERE email = '".$email."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		return true;
	}
}

function registerSuccess($conn, $name, $birthdate, $gender, $email, $pswd){
	$stmt  = $conn->prepare("INSERT INTO usertbl (name, birthdate, gender, email, pswd) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $d1, $d2, $d3, $d4, $d5);

	$d1 = $name;
	$d2 = $birthdate;
	$d3 = $gender;
	$d4 = $email;
	$d5 = $pswd;

	if ($stmt->execute()) {
		return true;
	}

	$stmt->close();
	$conn->close();
}
