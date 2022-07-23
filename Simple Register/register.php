<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary">

<div class="container mx-auto col-md-4  col-sm-12 bg-dark p-2 text-light" style="margin-top: 80px;">
  <h2>Register</h2>

 <?php
if (isset($_SESSION['registerErr'])){

      if($_SESSION['registerErr'] == "success" ){
            echo ' <div class="alert alert-success">
              <strong>Account Registered</strong> Please check in database
            </div>';
            $_SESSION['registerErr'] = "";
      }elseif ($_SESSION['registerErr'] == "error") {
            echo ' <div class="alert alert-warning">
              <strong>Warning!</strong> Something went wrong. Please check your inputs
            </div>';
            $_SESSION['registerErr'] = "";
      }elseif ($_SESSION['registerErr'] == "empty") {
            echo ' <div class="alert alert-warning">
              <strong>Fill all input box</strong>
            </div>';
            $_SESSION['registerErr'] = "";
      }elseif ($_SESSION['registerErr'] == "emailExist") {
            echo ' <div class="alert alert-warning">
              <strong>Email already registered.</strong>
            </div>';
            $_SESSION['registerErr'] = "";
      }



      

unset($_SESSION['registerErr']);
}
  ?>

	<form action="register.process.php" method="POST">
	    <div class="form-group">
	      <label for="name">Name</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="fname"  >  <!-- required -->
	    </div>
	    <div class="form-group">
	      <label for="bdate">Birthdate</label>
	      <input type="date" class="form-control" id="bdate" name="bdate" >  <!-- required -->
	    </div>
	    <div class="form-group">
	      <label for="gender">Gender</label>
					<select class="form-control" id="gender" name="gender">
				    <option>Male</option>
				    <option>Female</option>
				    <option>LGBTQIA+</option>
				  </select>
	    </div>
	    <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >  <!-- required -->
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password</label>
	      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"> <!-- required -->
	    </div>
	    <button type="submit " class="btn btn-success btn-block" name="btnLogin">Register</button>
	</form>
	<center ><a href="https://www.saucecoders.com/" target="_blank" class="text-warning">saucecoders.com</a></center>
</div>

</body>
</html>
