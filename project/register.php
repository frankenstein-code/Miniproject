<?php include('db/server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Providers</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
</head>
<body style="background-image: url(img/register.jpg); background-size: cover;">
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<!--Validation Errors-->
		<?php include('errors.php'); ?>
		<div class="input-group1">
			<div class="alignment">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" required pattern="^[A-Za-z]+" title="Enter valid username" placeholder="Enter Username">
		</div>
		<div class="input-group1">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>" required pattern="[^@\s]+@[^@\s]+" title="Enter valid email" placeholder="Enter Email">
		</div>
		<div class="input-group1">
			<label>Password</label>
			<input type="password" name="password_1" required pattern="^[A-Za-z0-9]+" placeholder="Enter Password">
		</div>
		<div class="input-group1">
			<label>Confirm Password</label>
			<input type="password" name="password_2" required pattern="^[A-Za-z0-9]+" placeholder="Confirm Password">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		</div>				
	</form>
</body>
</html>