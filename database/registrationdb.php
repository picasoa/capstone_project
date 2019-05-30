<?php
$host="localhost";
$user="root";
$pass="";
$db="registration";
$conn=mysqli_connect($host,$user,$pass,$db);
$email=$_POST["email"];
$user1=$_POST["user"];
$pass1=$_POST["pass"];
$pass2=$_POST["pass1"];
$phno=$_POST["phno"];
// if(!filter_var($email,FILTER_VALIDATE_EMAIL))
// {
// 	// alert('Enter valid email!!!');
// }

// else if($pass1!=$pass2)
// {
// 	alert('Password mismatch');
// }
$sql="INSERT INTO users VALUES('$user1','$email','$pass1','$phno')";
if(mysqli_query($conn,$sql))
{
	
	if($pass1==$pass2)
	{
	 echo "data added";	
	}
	else{
		session_start();
		$_SESSION["passerror"]="password did not match";
	header("location:registration.php");
	}
	
}
else
{
	echo "marja";
}
?>