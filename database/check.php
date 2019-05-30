<?php
$host="localhost";
$user="root";
$pass="";
$db="registration";
$conn=mysqli_connect($host,$user,$pass,$db);
// var_dump($_POST);
$sql="SELECT * FROM users WHERE username='".$_POST['user']."' AND pass='".$_POST['pass']."'";
// echo $conn->error;
$r=mysqli_query($conn,$sql);
// echo .$check;

if(mysqli_num_rows($r)>0)
{	
	if(isset($_POST["remenberMe"]))
	{
	
	$username= $_POST['user'];
	$pass = $_POST['pass'];
	setcookie('username',$username,time()+ (84000 * 30));//84000 likhna zaruri h ..cookie utne tym k liye save hoti h
	setcookie('password',$pass,time()+ (84000 * 30));
	}
	header("location:reg.php");
}
else
{
	echo "unsuccessful";

}
?>