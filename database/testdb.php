<?php 

    $host= "localhost";
    $user ="root";
    $pass = "";
    $database = "testdb";

    $conn =mysqli_connect($host,$user,$pass,$database);
    // $sql = "CREATE DATABASE TESTDB";


    if($conn){
    	echo "hello its done!<br>";
    // 	$query = "CREATE TABLE TESTTABLE(id INT NOT NULL AUTO_INCREMENT,name VARCHAR(30),pass VARCHAR(30),PRIMARY KEY (id))";

    // 	if(mysqli_query($conn,$query)){
    // 		echo "table made";
    // 	}
    		if(isset($_POST)){

    			if(mysqli_query($conn,"INSERT INTO TESTTABLE(name,pass) VALUES('".$_POST['userame']."','".$_POST['pass']."')"))
    			{
    				echo "added";
    			}
    			else{
    				echo $conn->error;
    			}
    			$ql =mysqli_query($conn,"SELECT * FROM TESTTABLE");
    			if($ql)
    			{
    				session_start();
    				$_SESSION["komal"]=mysqli_fetch_all($ql,MYSQLI_ASSOC);
    				header("location:testform.php");
    			}
    			else{
    				echo $conn->error;
    			}




    		}
    }
    


?>
