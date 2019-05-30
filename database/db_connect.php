<?php
session_start();
//declaring variables
    $host= "localhost";
    $user ="root";
    $pass = "fLUdSqyuUxRiiiJu";
    $database = "dversugo";


//connecting to the database    
    try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  if($conn){
   echo "connection made</br>";
  
   if($_SESSION["form"]=="index"){

        if($_POST){

            if($_POST["form"]=="login"){
            	
            	if(is_numeric($_POST["regNo"])){
              		
              		$_SESSION["reg"]= $_POST["regNo"];
              		checkLogin($_POST["regNo"],$_POST["password"],$conn);
            	}
            	else{
              		
              		$_SESSION["indexError"]="Enter a valid registrartion number";
              		var_dump($_SESSION["indexError"]);
              		header("Location:http://localhost/prototype/index.php");
            	}   
        	}
        	else{
        		registerUser($conn);
        	}
    	}
        else{
            
                session_destroy();
                header("Location:http://localhost/prototype/index.php");
          
        }
        
    }
    elseif($_SESSION["form"]=="profile"){
        echo "in profile"; 
        
        if($_POST){

            if($_POST["form"]=="add"){

                echo "add post form";
                addPost($_SESSION["reg"],$conn);
                
            }

            elseif($_POST["form"]=="edit"){
                
                echo "edit profile form";
                editProfile($_SESSION["reg"],$conn);
            }

            else{

                echo "in addpro if";
                addProject($_SESSION["reg"],$conn);
            
            }
        }

        else{
            if($_GET["value"]=="logout"){
                
                session_destroy();
                header("Location:http://localhost/prototype/index.php");
            
            }
        }

    }
    elseif ($_SESSION["form"]=="admin") 
    {
      if($_GET){
        
        if($_GET["value"]==logout){
          
          session_destroy();
          header("Location:http://localhost/prototype/index.php");
        
        }
      }
      if(isset($_POST["form"])){
        	
        	echo "a post from";
            
            if($_POST["form"]=="adduser"){
                // var_dump($_POST);
                echo "in add user<br>";
                $name=explode(" ",$_POST["name"]);
                $password = $name[0].$_POST["regNo"];

                $insert = $conn->prepare("INSERT INTO users (RegNo,password,Name,DOB,email,mobileNo,TYPE) VALUES (:re,:pa,:na,:db,:em,:mb,:tp)");
                
                $insert->execute(array(":re"=>$_POST["regNo"],":pa"=>$password,":na"=>$_POST["name"],":db"=>$_POST["DOB"],":em"=>$_POST["email"],":mb"=>$_POST["mobileNo"],":tp"=>$_POST["usertype"]));
            
                $query = $conn->prepare("SELECT * FROM users");
            
                $query->execute();
              
                $userlist = $query->fetchAll();
            
                $_SESSION["userList"] = $userlist;

                $query1 = $conn->prepare("DELETE FROM registration WHERE regNo=:rn");
                
                $query1->execute(array(":rn"=>$_POST["regNo"]));

                $query2 =$conn->prepare("SELECT * FROM registration");

                $query2->execute();

                $_SESSION["regList"]= $query2->fetchAll();
     			 
     			 // sendMail($password,$_POST["email"]);

                header("Location:http://localhost/prototype/adminPage.php");


            }
            elseif($_POST["form"]=="deleteuser"){

            	$query1 = $conn->prepare("DELETE FROM users WHERE RegNo=:rn");
                
                $query1->execute(array(":rn"=>$_POST["regNo"]));

                $query2 = $conn->prepare("DELETE FROM posts WHERE reg=:rn");
                
                $query2->execute(array(":rn"=>$_POST["regNo"]));

                $query3 = $conn->prepare("DELETE FROM project WHERE regNo=:rn");
                
                $query3->execute(array(":rn"=>$_POST["regNo"]));

                $query4 = $conn->prepare("DELETE FROM social WHERE regNo=:rn");
                
                $query4->execute(array(":rn"=>$_POST["regNo"]));

                $getall =$conn->prepare("SELECT * FROM users");

                $getall->execute();

                $_SESSION["userList"]= $getall->fetchAll();
                header("Location:http://localhost/prototype/adminPage.php");
            }
            else{
                
                if($_POST["name"]){
                
                    $query = $conn->prepare("SELECT * FROM users WHERE Name=:nm");
            
                     $query->execute(array(":nm"=>$_POST["name"]));
            
                      $userlist = $query->fetchAll();
            
                    $_SESSION["userList"] = $userlist;
          
                    header("Location:http://localhost/prototype/adminPage.php");
                 	
                 }
             
        		elseif($_POST["regNo"]){
                   
             		 $query = $conn->prepare("SELECT * FROM users WHERE RegNo=:rn");
            
             		 $query->execute(array(":rn"=>$_POST["regNo"]));
            
              	     $userlist = $query->fetchAll();
            	
              		$_SESSION["userList"] = $userlist;
          
              		header("Location:http://localhost/prototype/adminPage.php");  
                  
          		}
          		elseif($_POST["email"]){
                    
                    $query = $conn->prepare("SELECT * FROM users WHERE email=:em");
            
                    $query->execute(array(":em"=>$_POST["email"]));
            
                    $userlist = $query->fetchAll();
            
                    $_SESSION["userList"] = $userlist;
          
                    header("Location:http://localhost/prototype/adminPage.php");
                  }
                  else{

                    $query = $conn->prepare("SELECT * FROM users");
            
                    $query->execute();
            
                    $userlist = $query->fetchAll();
            
                    $_SESSION["userList"] = $userlist;
          
                    header("Location:http://localhost/prototype/adminPage.php");


                  }
                }
              }
        }
    }
   else{
 echo "hello you out here in nowhere";
   }
  
  }
 

    catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
  }

//checking login function
function checkLogin ($a,$b,$c){
    echo $a;
    
    $query = $c->prepare("SELECT * FROM users where RegNo=:uPass");    
    
    $query->execute(array(':uPass'=>$a));
    echo "quering</br>";
    $okUser = $query->fetch(PDO::FETCH_ASSOC);
      var_dump($okUser);
      echo '<br>';
    
    if($okUser){

       if($okUser["password"]==$b){
        echo  "password ok<br>";
        
        if($okUser["TYPE"]=="admin"){
      
          $query4 = $c->prepare("SELECT * FROM users");
      
          $query4->execute();
      
          $userlist = $query4->fetchAll();
      
          $_SESSION["userList"] = $userlist;

          $query5 =$c->prepare("SELECT * FROM registration");

          $query5->execute();

          $_SESSION["regList"]=$query5->fetchAll();

          header("Location:http://localhost/prototype/adminPage.php");
        }  
        
        $_SESSION["proData"]= $okUser;
  
        $query2=$c->prepare("SELECT * FROM project where regNo=:reg");
  
        $query2->execute(array(':reg'=>$a));
  
        $udata= $query2->fetchAll();

        $_SESSION["projects"]=$udata;
 
        $query3 = $c->prepare("SELECT * FROM posts where reg=:reg");
  
        $query3->execute(array(":reg"=>$a));

        $result = $query3->fetchAll();
    
        $_SESSION["posts"]= $result;

        $conn=null;

        header("location:http://localhost/prototype/profile.php");

       }
       else{
           $_SESSION["indexError"]="wrong password ";
           header("Location:http://localhost/prototype/index.php");
       }

    }
    else {
      $_SESSION["indexError"]="You are an unauthorized user !";
      header("Location:http://localhost/prototype/index.php");
    }
   
}
 
 //function used to add a post by the user 
 function addPost($r,$c){
    echo "i am in addpost<br>";

     moveFile($_FILES["postImage"]);

    $date =date("Y/m/d").date("h:i:sa");
    
    $query1 = $c->prepare("INSERT INTO posts (reg,heading,time,description,image,category) VALUES (:reg,:head,:tim,:des,:img,:cat)");
    
    $query1->execute(array(":reg"=>$r,":head"=>$_POST["Title"],":tim"=>$date,":des"=>$_POST["description"],":img"=>$_FILES["postImage"]["name"],":cat"=>$_POST["category"]));

  $query3 = $c->prepare("SELECT * FROM posts where reg=:reg");
  
  $query3->execute(array(":reg"=>$r));

  $result = $query3->fetchAll();
    
  $_SESSION["posts"]= $result;

    $conn=null;

  header("Location:http://localhost/prototype/profile.php");
 }
 
 function editProfile($r,$c){
    echo " i am in edit project<br>".$r."<br>";
    
    if($_FILES["proPic"]["name"] && $_FILES["coverPic"]["name"]){
    	// echo "both are present";
    	// print_r($_FILES);
    	// exit;
    	foreach ($_FILES as $value) {
        	moveFile($value);
    	}
    	$query = $c->prepare("UPDATE users  SET Name=:n ,DOB=:d, email=:e, mobileNo=:m, address=:a, languages=:l, skills=:s, advice=:ad, propic=:ppic, coverpic=:cpic WHERE RegNo=:r");
    	$query->execute(array(":n"=>$_POST["userName"],":d"=>$_POST["dateOfBirth"],":e"=>$_POST["email"],":m"=>$_POST["phoneNumber"],":a"=>$_POST["address"],":l"=>$_POST["languages"],":s"=>$_POST["skills"],":ad"=>$_POST["advice"],":ppic"=>$_FILES["proPic"]["name"],":cpic"=>$_FILES["coverPic"]["name"],":r"=>$r));  
    }
    elseif($_FILES["proPic"]["name"]) {
    	// echo "propic is present";exit;
    	foreach ($_FILES as $value) {
        	moveFile($value);
    	}
    	$query = $c->prepare("UPDATE users  SET Name=:n ,DOB=:d, email=:e, mobileNo=:m, address=:a, languages=:l, skills=:s, advice=:ad, propic=:ppic WHERE RegNo=:r");
    	$query->execute(array(":n"=>$_POST["userName"],":d"=>$_POST["dateOfBirth"],":e"=>$_POST["email"],":m"=>$_POST["phoneNumber"],":a"=>$_POST["address"],":l"=>$_POST["languages"],":s"=>$_POST["skills"],":ad"=>$_POST["advice"],":ppic"=>$_FILES["proPic"]["name"],":r"=>$r));  
    }
    elseif($_FILES["coverPic"]["name"]){
    	// echo "cooverpic is present";exit;
    	foreach ($_FILES as $value) {
        	moveFile($value);
    	}
    	$query = $c->prepare("UPDATE users  SET Name=:n ,DOB=:d, email=:e, mobileNo=:m, address=:a, languages=:l, skills=:s, advice=:ad, coverpic=:cpic WHERE RegNo=:r");
    	$query->execute(array(":n"=>$_POST["userName"],":d"=>$_POST["dateOfBirth"],":e"=>$_POST["email"],":m"=>$_POST["phoneNumber"],":a"=>$_POST["address"],":l"=>$_POST["languages"],":s"=>$_POST["skills"],":ad"=>$_POST["advice"],":cpic"=>$_FILES["coverPic"]["name"],":r"=>$r));  

    }
    else{
    	// echo "none are present";exit;
    	$query = $c->prepare("UPDATE users  SET Name=:n ,DOB=:d, email=:e, mobileNo=:m, address=:a, languages=:l, skills=:s, advice=:ad WHERE RegNo=:r");
    	$query->execute(array(":n"=>$_POST["userName"],":d"=>$_POST["dateOfBirth"],":e"=>$_POST["email"],":m"=>$_POST["phoneNumber"],":a"=>$_POST["address"],":l"=>$_POST["languages"],":s"=>$_POST["skills"],":ad"=>$_POST["advice"],":r"=>$r));  
    }


    $query1 = $c->prepare("SELECT * FROM USERS WHERE RegNo
  =:r");
    $query1->execute(array(":r"=>$r));

    $_SESSION["proData"] = $query1->fetch();

    $query2 = $c->prepare( "UPDATE SOCIAL SET facebook=:f, instagram=:i, twitter=:t, pinterest=:p, linkedin=:l  WHERE regNo=:r ");

    $query2->execute(array(":f"=>$_POST["facebook"],":i"=>$_POST["instagram"],":t"=>$_POST["twitter"],":p"=>$_POST["pinterest"],":l"=>$_POST["linkedin"],":r"=>$r));

    $query3 = $c->prepare("SELECT * FROM SOCIAL WHERE RegNo=:r"); 
    
    $query3->execute(array(":r"=>$r));
    $_SESSION["social"]=$query3->fetch();    
    // var_dump($_SESSION["social"]);
    
    $conn=null;

    header("Location:http://localhost/prototype/profile.php");

 }

 function addProject($r,$c){

    echo "in project add <br>";

$query0= $c->prepare("SELECT * FROM project WHERE regNo=:r");


echo "query0 prepared<br>";


$query0->execute(array(":r"=>$r));


echo "query0 exe<br>";

$insert = $c->prepare("INSERT INTO project (heading,picture,description,date,regNo) VALUES (:h,:p,:d,:dt,:r)");
$fetch = $c->prepare("SELECT * FROM  project WHERE regNo=:r");
$date =date("Y/m/d");

if($query0->rowCount()==0){
    var_dump($_FILES); 
     foreach ($_FILES as $value) {
        moveFile($value);
    }
   
   if(($_POST["head2"]==" " ||  $_POST["head2"]=="") && ($_POST["head1"]==" " || $_POST["head1"]=="")){
 echo "no project";
   }
   elseif($_POST["head2"]=="" || $_POST["head2"]==" "){

 $insert->execute(array(":h"=>$_POST["head1"],":p"=>$_FILES["img1"]["name"],":d"=>$_POST["des1"],":dt"=>$date,":r"=>$r)); 
   }
   elseif($_POST["head1"]=="" || $_POST["head1"]==" "){

 $insert->execute(array(":h"=>$_POST["head2"],":p"=>$_FILES["img2"]["name"],":d"=>$_POST["des2"],":dt"=>$date,":r"=>$r)); 
   }
   else{
 
 $insert->execute(array(":h"=>$_POST["head1"],":p"=>$_FILES["img1"]["name"],":d"=>$_POST["des1"],":dt"=>$date,":r"=>$r));
 $insert->execute(array(":h"=>$_POST["head2"],":p"=>$_FILES["img2"]["name"],":d"=>$_POST["des2"],":dt"=>$date,":r"=>$r)); 
   }


}

else {
     var_dump($_FILES);
     foreach ($_FILES as $value) {
        moveFile($value);
    }

 $insert->execute(array(":h"=>$_POST["head1"],":p"=>$_FILES["img1"]["name"],":d"=>$_POST["des1"],":dt"=>$date,":r"=>$r));
 $insert->execute(array(":h"=>$_POST["head2"],":p"=>$_FILES["img2"]["name"],":d"=>$_POST["des2"],":dt"=>$date,":r"=>$r)); 

}
$fetch->execute(array(":r"=>$r));

$_SESSION["projects"]=$fetch->fetchAll();

$conn=null;

header("Location:http://localhost/prototype/profile.php");

 }
 function moveFile($f) {
     $target_dir = 'images/';
     $target_file = $target_dir .$f["name"];
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
    if(isset($_POST["submit"])){ 
        
        $check = getimagesize($f["tmp_name"]);
        
        if($check !== false) {
        
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else {

            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }       
    
    if ($f["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        
        echo "Sorry, your file was not uploaded.";
    } 
    else {
        
        if (move_uploaded_file($f["tmp_name"], $target_file)) {
            echo "The file ". basename( $f["name"]). " has been uploaded.";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
 }

function registerUser($c){
	echo "in register user<br>";	
	$query  = $c->prepare("INSERT INTO REGISTRATION(regNo,name,email,DOB,mobileNo,address) VALUES (:rn,:nm,:em,:db,:mn,:ad)");
	$query->execute(array(":rn"=>$_POST["regNo"],":nm"=>$_POST["name"],":em"=>$_POST["email"],":db"=>$_POST["DOB"],":mn"=>$_POST["mobileNo"],":ad"=>$_POST["address"]));
	$_SESSION["indexError"]="Your request has been registered";
	header("location:http://localhost/prototype/index.php");

}

?>

