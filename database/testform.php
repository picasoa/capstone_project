<!DOCTYPE html>
<html>
<head>
	<title>testform</title>
</head>
<body>
	<h1>send data</h1>
	<form method="POST" action="testdb.php">
		<input type="text" name="userame" placeholder="name">
		<input type="password" name="pass" placeholder="password">
		<input type="submit" name="sub-btn" value="submit">
		
	</form>
	<?php 
	session_start();
	if(isset($_SESSION["komal"])){
	if($_SESSION["komal"])
	{

		echo '<table>
		<th>names</th><th>password</th>';
		foreach($_SESSION["komal"] as $user)
		{
			echo'<tr><td>'.$user["name"].'</td><td>'.$user["pass"].'</td></tr>';
		}
		echo"</table>";
		session_destroy();
	}
}
	?>

</body>
</html>