<?php
$host= "localhost";
$user ="root";
$pass = "";
$database = "dversugo";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    if($conn){
        
        $sth = $conn->prepare("SELECT * from posts order by views desc limit 6");
        $sth->execute();

        $posts = $sth->fetchAll();
    }
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}