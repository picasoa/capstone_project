<!DOCTYPE html>
<html>
<head>
	<title>uploading</title>
</head>
<body>
<form method="POST" action="file.php">
	<input type="file" name="fileupload" id="fileupload">
	<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	if(isset($_POST["fileupload"]))
	{
        echo "<img src=img/".$_POST["fileupload"].">";
    }
    else
    {
    	echo "img not found";
    }
}
?>
</body>
</html>