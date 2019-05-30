<?php
$host="localhost";
$user="root";
$pass="";
$db="lpu";
$conn=mysqli_connect($host,$user,$pass,$db);
// $sql="CREATE TABLE students(regno INT(6),name VARCHAR(30),course VARCHAR(50))";
 // -- $sql="INSERT INTO students VALUES('11610625','Rajat','BTech')";
$sql="UPDATE students SET regno=11612345 WHERE name='aman'";
$result=mysqli_query($conn,$sql);
// while($rows=mysqli_fetch_assoc($result))
// {
	// echo "regno:".$rows["regno"]."---name:".$rows["name"]."---course:".$rows["course"]."<br>";
    // echo $rows["name"]."<br>";
// }

?>