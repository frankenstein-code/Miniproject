<?php include('db/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Service Providers</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body style="background-image: url(img/login.jpg); background-size: cover;">

		    <h1 style="text-align: center; color: white;">Welcome User</h1>      


	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<!--Validation Errors-->
		<?php include('errors.php'); ?>

		<div class="logincenter">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter Username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>

		</div>

	</form>
	<br>	<br>	<br>	<br>
	<br>	<br>	<br>	<br>
	<br>	<br>
	<p align="right"><a href="index.php">home</a></p>
</body>
</html>