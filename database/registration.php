<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<h1>Register Here</h1>
<form method="POST" action="registrationdb.php">
	username:<input type="text" name="user" placeholder="enter username"><br>
	Email:<input type="email" name="email" placeholder="Enter your email"><br>
	Password:<input type="password" name="pass" placeholder="Enter password"><br>
	Re-enter password:<input type="password" name="pass1" placeholder="reenter password"><br>
	<?php
	session_start(); 
	if(isset($_SESSION["passerror"]) && $_SESSION["passerror"]){

		echo "<p>".$_SESSION['passerror']."</p>";
		session_destroy();
	}

	?>
	Phone-number:<input type="text" name="phno" placeholder="Enter phone number" maxlength="10" minlength="10"><br>
	<input type="submit" name="submit" value="register">
</body>
</html>