<!DOCTYPE html>
<html>
<head>
	<title>require</title>
</head>
<body>
<h1>Required page</h1><br>

<h2>tenu mai chhadan ga nhi</h2>
<form method="POST" action="req.php"><input type="submit" name="submit"></form>
<?php 
session_start();
if(isset($_SESSION["array"]))
{
	echo "Error occured";
}
// session_destroy();
 ?>
</body>
</html>