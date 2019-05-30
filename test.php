<?php
$userName = "nick";
session_start();
$_SESSION["username"]= $userName;
header("location:test2.php");
?>