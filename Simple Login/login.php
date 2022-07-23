<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary">

<div class="container mx-auto col-md-4  col-sm-12 bg-dark p-2 text-light" style="margin-top: 100px;">
  <h2>Login</h2>

  <?php
 if (isset($_SESSION['loginErr'])){

      if($_SESSION['loginErr'] == "notExist" ){
            echo ' <div class="alert alert-danger">
              <strong>Account not found.</strong> Check your email and password.
            </div>';
            $_SESSION['loginErr'] = "";
      }elseif ($_SESSION['loginErr'] == "empty") {
            echo ' <div class="alert alert-warning">
              <strong>Warning!</strong> Email or Password is empty.
            </div>';
            $_SESSION['loginErr'] = "";
      }

unset($_SESSION['loginErr']);
}
  ?>

	<form action="login.process.php" method="POST">
	    <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >  <!-- required -->
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password</label>
	      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"> <!-- required -->
	    </div>
	    <div class="form-group form-check">
	      <label class="form-check-label">
	        <input class="form-check-input" type="checkbox" name="remember"> Remember me (Not working she's not remember me)
	      </label>
	    </div>
	    <button type="submit " class="btn btn-primary btn-block" name="btnLogin">Login</button>
	</form>
	<center ><a href="https://www.saucecoders.com/" target="_blank" class="text-warning">saucecoders.com</a></center>
</div>

</body>
</html>
