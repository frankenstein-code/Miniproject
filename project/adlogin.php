<?php include('db/adserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Service Providers(ADMIN)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body style="background-image: url(img/adlogin.jpg); background-size: cover;">
    <br>
    <br>
<center><h2 style="color: white;">ADMIN LOGIN:</h2></center>  
	<div class="header">
		<h2>Login</h2>
	</div>

    <form method="post" action="adminpage.php">
		<!--Validation Errors-->
		<?php include('errors.php'); ?>
                <div class="input-group" style="padding-left: 80px">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group" style="padding-left: 80px">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group" style="padding-left: 80px">
			<button type="submit" name="adlogin" class="btn">Login</button>
		</div>
	</form>
</body>
</html>