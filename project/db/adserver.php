<?php
	session_start();
	$errors = array();

	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'sp');

	//log user in from login page
	if (isset($_POST['adlogin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = $password; //encrypt password
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				header('location: adindex.php'); //redirect to homepage
			} else {
				array_push($errors, "Wrong username/password");	
			}
		}
	}

	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: front.php');
	}
?>