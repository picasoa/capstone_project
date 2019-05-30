<?php 
session_start();
	if(!$_SESSION["proData"]){
		header("Location:http://localhost/prototype/index.php");
	}
	$_SESSION["form"]="profile";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/profile.css">
	<script type="text/javascript" src="scripts/jq.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\modal.css">
	<script type="text/javascript">
</script>
</head>
<body>
<?php 
include("modals/add-post.php")
?>
<?php 

 	if(isset($_SESSION["social"]))
        {
             $facebook= $_SESSION["social"]["facebook"];
                    $instagram=$_SESSION["social"]["instagram"];
                    $twitter=$_SESSION["social"]["twitter"];
                    $pinterest=$_SESSION["social"]["pinterest"];
                    $linkedin=$_SESSION["social"]["linkedin"];
                }
                else{
                    
                    $facebook="http://www.facebook.com/".$_SESSION["proData"]["Name"];
                    $instagram="http://www.instagram.com/".$_SESSION["proData"]["Name"];
                    $twitter="http://www.twitter.com/".$_SESSION["proData"]["Name"];
                    $pinterest="http://www.pinterest.com/".$_SESSION["proData"]["Name"];
                    $linkedin="http://www.linkedin.com/".$_SESSION["proData"]["Name"];
                }


include("modals/editprofile.php")
?>
<?php 
include("modals/addproject.php")
?>
<div id="main">
	<div class="bar">
	<div class="icon menu"></div>
	
	</div>
	<!-- <div class="search"><i class="fa fa-search"></i></div> -->
	<div class="menu_box">
		<div class="social-bar">
			<ul>
				<li><a href="<?php echo $_SESSION['social']['facebook'];?>" target="_black"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $_SESSION['social']['instagram'];?>" target="_black"><i class="fa fa-instagram"></i></a></li>
				<li><a href="<?php echo $_SESSION['social']['twitter'];?>" target="_black"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $_SESSION['social']['pinterest'];?>"target="_black"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="<?php echo $_SESSION['social']['linkedin'];?>" target="_black"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
		<h1>VERSUGO</h1>
		<ul>
			<li><a href="http://localhost/prototype/index.php">Home</a></li>
			<li><button type="button" class="btn btn-primary" style=" background: transparent; border:0; font-size:1.5em; padding: 0; ">Cover letter
          </button></li>
			<li><a href="blog.php"><button type="button" class="btn btn-primary" style=" background: transparent; border:0; font-size:1.5em; padding: 0; " >Blog
          </button></a></li>
			<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inbox" style=" background: transparent; border:0; font-size:1.5em; padding: 0; " >Inbox
          </button></li>
			<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditProfile" style=" background: transparent; border:0; font-size:1.5em; padding: 0; " >Edit Profile
          </button></li>
          	<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPost" style=" background: transparent; border:0; font-size:1.5em; padding: 0; " >Add Post
          </button></li>
          	<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProject" style=" background: transparent; border:0; font-size:1.5em; padding: 0; " >Add project
          </button></li>
          <?php if($_SESSION["proData"]["TYPE"]=="admin"){
          	echo "<li><a href='adminPage.php'>Adminpage</a></li>";
          } ?>
          <li><a href="database/db_connect.php?value=logout">Logout</a></li>

		</ul>
	</div>
	<div class="cover_box">
		<div class="cover_pic" style="background: url('<?php echo 'database/images/'.$_SESSION['proData']['coverpic'];?>');background-size: cover">
			<h1>VERSUGO</h1>
			<q>
				<?php echo $_SESSION["proData"]["advice"];  ?>
			</q>
		</div>
		<img src="">
	</div>

	<div class="profile_data">
		<div class="profile_pic_box">
			<img src="<?php echo 'database/images/'.$_SESSION['proData']['propic'];?>">
		</div>
		<div class="profile_info">
			<div class="heading"><span style="font-size: .3em;">About</span> Me</div>
			<div class="info">
				<ul rel="1">
					<li><?php echo $_SESSION["proData"]["Name"]; ?></li>
					<li><?php echo $_SESSION["proData"]["email"]; ?></li>
					<li><?php echo $_SESSION["proData"]["mobileNo"]; ?></li>
					<li><?php echo $_SESSION["proData"]["DOB"];?></li>
				</ul>
				<div class="more_info" rel="2">
					<div><h2>Address</h2>
					<p><?php echo $_SESSION["proData"]["address"]; ?></p></div>
					<div><h2>Skills</h2>
					<p><?php echo $_SESSION["proData"]["skills"];?></p></div>
					<div>	<h2>languages</h2>
					<p><?php echo $_SESSION["proData"]["languages"];?></p></div>
				</div>
			</div>
			<i class="next fa fa-chevron-circle-right"></i>
			<i class="back fa fa-chevron-circle-left"></i>

		</div>
		<br>
		<div style="clear: both;"></div>
		<div class="projects">
				<?php if(isset($_SESSION["projects"])){
							foreach ($_SESSION["projects"] as $value) 
							{ 
								echo "<div class='project'>
								<center><p>".$value["date"]."</p></center>
								<h2>".$value["heading"]."</h2>
								<img src='database/images/".$value["picture"] ."'><p>".$value["description"]."</p>
								</div>"; 
						}
					} 
		else {echo "hello bro you dumb";}  
		?>
		</div>
		<div style="clear: both;"></div>
		<div class="posts">
			<?php foreach ($_SESSION["posts"] as $value){
				echo '<div class="post_box"><a href="#">
				 <div class="post_img"><img src="database/images/'.$value["image"].'">
				 </div></a><div class="post_type"><a href="#"><h3>'.$value["category"].'</h3></a>		
				 </div><a href="#"><div class="post_title">'.$value["heading"].'</div></a>
				 <a href="#"><div class="post_info">'.$value["description"].'</div></a></div>';
			} ?> 	
		</div>	
	</div>
	
	

<div style="clear: both;"></div>
</div>




<script type="text/javascript" src="scripts/profile.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/modal.js"></script>


</body>
</html>