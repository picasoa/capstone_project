
<?php
$host="localhost";
$user="root";
$pass="";
$db="registration";
$conn=mysqli_connect($host,$user,$pass,$db);
$name=$_POST["name"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$pass1=$_POST["pass"];
$sql="SELECT * FROM users WHERE name='$name'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$query="UPDATE users SET email='$email',pass='$pass1',phno='$phno' WHERE name='$name'";
	$result1=mysqli_query($conn,$query);
	if(mysqli_num_rows($result1)>0)
	{
		echo "updated";
	}
}
?>