<?php

function checkLogin($conn, $email, $pswd){
	$sql = "SELECT * FROM usertbl WHERE email = '".$email."' AND pswd = '".$pswd."' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		if($row = mysqli_fetch_assoc($result)){
			$_SESSION['userid'] = $row['userid'];
			$_SESSION['name'] = $row['name'];
			header("Location: home.php");
			exit();
		}
	}else{
		return false;
	}
	mysqli_close($conn);
}

 ?>