<?php
echo "Bhag yaha se";
$a1="komal";
$a2="komala";
if($a1==$a2)
{
	echo "matched";
}
else
{
	session_start();
	$_SESSION["array"]="not matched";
	header("location:requireEx.php");
}
?>