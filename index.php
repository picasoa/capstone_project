<?php session_start(); 
$_SESSION["form"]="index"; ?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Dernier Ciri</title>
		<link href="https://fonts.googleapis.com/css?family=Engagement" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <link rel="stylesheet" type="text/css" href="css\modal.css">
		<script type="text/javascript" src="scripts/jq.js"></script>
	</head>
	<body>
		<?php
		if(isset($_SESSION["reg"]) && isset($_SESSION["proData"])){ 
			echo"";
		}
		else{
			if(isset($_SESSION["indexError"])){
				if ($_SESSION["indexError"]) {
					$error=$_SESSION["indexError"];
					echo "<center style='font-size:1.5em; background:#212121; color:white;'>".$error." !</center>";
				}
			}
		}
		include("modals/sign-in.php");
		include("modals/register.php");
		 ?>
		<div id="main">
			<div class="header">
				<nav>
					<ul>
						<li><a href="">BLOG</a></li>
						<li><a href="#">MAGAZINE</a></li>
						<li><?php if(isset($_SESSION["reg"]) && isset($_SESSION["proData"])){
									echo "<a href='http://localhost/prototype/profile.php'><button type='button' class='btn-primary' style='background: transparent; border:0;font-weight: bold;'>MY PORTFOLIO</button></a>";
									echo "<a href='database/db_connect.php?value=logout'><button type='button' class='btn-primary' style='background: transparent; border:0;font-weight: bold;'>LOGOUT</button></a>";
									}
								else{
									echo '<a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signIn" style=" background: transparent; border:0;font-weight: bold;">LOGIN</button></a>';
								} ?>
							</li>
					</ul>
				</nav>
				<div class="slider">
					<img src="images/asset 3-100-u204-fr.png" class="active" alt="Simply Different By Nature" title="1">
					<img src="images/asset 3-100-u204-fr.png" alt="Simply Different By Nature" title="2">
					<img src="images/asset 3-100-u204-fr.png" alt="Simply Different By Nature" title="3">
					<img src="images/asset 3-100-u204-fr.png" alt="Simply Different By Nature" title="4">
				</div>
			</div>
			
			
			<div class="jump_headings">
				<div class="scrollbar">
					<div class="scrollindi"></div>
				</div>
				<ul>
					<li><a href="#insight">Insight</a></li>
					<li><a href="#courses">Course</a></li>
					<li><a href="#Happening">Happening</a></li>
					<li><a href="#FTD">From the Desk</a></li>
					<li><a href="#GT">Get in Touch</a></li>
				</ul>
			</div>
			<div id="insight">
				<div class="insight_inner_box">
					<h1 class="main-heading">Nam porttitor luctus</h1>
					<h3 class="sub-heading">augue nec lacinia. Proin lacus ligula, malesuada a nunc eget, congue lobortis tortor. </h2>
					<div class="box1">
						<div class="part1">
							<img src="images/pasted image 386x280-crop-u287.jpg" alt="">
						</div>
						<div class="part2">
							<h3>entum, id sollicitudin</h3>
							<p>odio vulputate. Donec non pellentesque ipsum. Nullam eget ultricies leo. Morbi suscipit egestas nibh pharetra condimentum. Ut ut justo quis arcu laoreet placerat id ut risus.
							</p>
						</div>
					</div>
					<div class="box1">
						
						<div class="part2">
							<h3>entum, id sollicitudin</h3>
							<p>odio vulputate. Donec non pellentesque ipsum. Nullam eget ultricies leo. Morbi suscipit egestas nibh pharetra condimentum. Ut ut justo quis arcu laoreet placerat id ut risus.
							</p>
						</div>
						<div class="part1">
							<img src="images/pasted image 386x280-crop-u287.jpg" alt="">
						</div>
					</div>
					<div class="box1">
						<div class="part1">
							<img src="images/pasted image 386x280-crop-u287.jpg" alt="">
						</div>
						<div class="part2">
							<h3>entum, id sollicitudin</h3>
							<p>odio vulputate. Donec non pellentesque ipsum. Nullam eget ultricies leo. Morbi suscipit egestas nibh pharetra condimentum. Ut ut justo quis arcu laoreet placerat id ut risus.
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div id="courses">
				<h2>Courses</h2>
				<div class="container">
					<div class="column act">
						<div class="content ">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg1"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion 2</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg2"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion 3</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg3"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg4"></div>
					</div>

					<div class="column">
						<div class="content">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg4"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg4"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg4"></div>
					</div>
					<div class="column">
						<div class="content">
							<h1>Fashion</h1>
							<div class="boxx">
								<h2>What Is BALHA BALH</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									
								</p>
							</div>
						</div>
						<div class="bg bg4"></div>
					</div>			
				</div>

			</div>
			<div style="clear: both;"></div>
			<div id="Happening">
				<div class="video">
					<video >
						<source src="" type="" media="">
					</video>
				</div>
				<div class="happen-box">
					<div class="row row1">
						<ul>
							<li><a href="#"><img src="images/pasted image 275x183-crop-u534.jpg" alt=""></a></li>
							<li><a href="#"><img src="images/pasted image 1400x933-crop-u531.jpg" alt=""></a></li>
							<li><a href="#"><img src="images/pasted image 300x168-crop-u540.jpg" alt=""></a></li>
						</ul>
					</div>
					<div class="row row2">
						<ul>
							<li><a href="#"><img src="images/pasted image 1000x750-crop-u543.jpg" alt=""></a></li>
							<li><a href="#">
								<span>H</span>
								<span>A</span>
								<span>P</span>
								<span>P</span>
								<span>E</span>
								<span>N</span>
								<span>I</span>
								<span>N</span>
								<span>G</span>
							</a></li>
							<li><a href="#"><img src="images/fashion-school-graduates-instagram-brands-crop-u594.jpg" alt=""></a></li>
						</ul>
					</div>
					<div class="row row3">
						<ul>
							<li><a href="#"><img src="images/pasted image 1240x395-crop-u600.jpg" alt=""></a></li>
							<li><a href="#"><img src="images/pasted image 848x476-crop-u603.jpg" alt=""></a></li>
							<li><a href="#"><img src="images/pasted image 1240x395-crop-u600.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="FTD">
				<div class="inner">
					<h1>From the Desk</h1>
					<div class="box1">
						<h3>Rajat <br><b style="font-size: 1.5em;position: absolute; z-index: 90;">silwal</b></h3>
						<div class="img"><img src="images/pasted image 183x275-crop-u685.jpg"></div>
						<p>sapien cursus, in bibendum tortor lobortis. Proin lacinia lectus sed tellus consequat commodo. Morbi eros massa, pharetra eget convallis nec, posuere vitae nisi. Etiam</p>
					</div>
					<div style="clear: both;"></div>
					<div class="box2">
						
						<div class="para">sapien cursus, in bibendum tortor lobortis. Proin lacinia lectus sed tellus consequat commodo. Morbi eros massa, pharetra eget convallis nec, posuere vitae nisi. Etiam</div>
						<h3>Komal <br><b style="font-size: 1.5em;position: absolute;z-index: 90;">Sharma</b></h3>
						<div class="img"><img src="images/pasted image 183x275-crop-u694.jpg">
						</div>
					</div>
					<div style="clear: both;"></div>
					
					<div class="box1">
						<h3>Rajat <br><b style="font-size: 1.5em;position: absolute; z-index: 90;">silwal</b></h3>
						<div class="img"><img src="images/pasted image 183x275-crop-u685.jpg"></div>
						<p>sapien cursus, in bibendum tortor lobortis. Proin lacinia lectus sed tellus consequat commodo. Morbi eros massa, pharetra eget convallis nec, posuere vitae nisi. Etiam</p>
					</div>
					<div style="clear: both;"></div>
					<div class="box2">
						
						<div class="para">sapien cursus, in bibendum tortor lobortis. Proin lacinia lectus sed tellus consequat commodo. Morbi eros massa, pharetra eget convallis nec, posuere vitae nisi. Etiam</div>
						<h3>Komal <br><b style="font-size: 1.5em;position: absolute;z-index: 90;">Sharma</b></h3>
						<div class="img"><img src="images/pasted image 183x275-crop-u694.jpg">
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>
			
			<div class="blogpost">
				<h2>This Week's Blog Posts</h2>
				<div class="inner">
					<div class="thumbs">
						<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div style="clear: both;"></div>
					<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div class="blog1">
						<div class="img">
							<img src="images/pasted%20image%201280x720-crop-u925.jpg">
						</div>
						<p>Etiam id mauris condimentum, pellentesque dolor eget, eleifend risus</p>
					</div>
					<div style="clear: both;"></div>
					<center><a style="color: white; text-decoration: none; font-size: 1.2em;" href="#" title="">MORE</a></center>
					</div>
				</div>
				
			</div>
			
			<div id="GT">
				<div class="inner">
					<h1>Get in touch</h1>
					<div class="box1">
						<h3>ADDRESS</h3>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						
					</div>
					<div class="box1">
						<h3>PHONE</h3>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						
					</div>
					<div class="box1">
						<h3>EMAIL</h3>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						<h5>met lectus dignissim im</h5>
						<p>dhand 8889348/<br>47 bhcdu</p>
						
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>
			<footer>
				<div class="inner">
					<div class="part">
						<h2>GO TO</h2>
						<ul>
							<li><a href="#">Insight</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Happening</a></li>
							<li><a href="#">From the Desk</a></li>
							<li><a href="#">Get in Touch</a></li>
						</ul>
					</div>
					<div class="part">
						<h2>Give Us a Call</h2>
						<ul>
							<li>Global & North America +1 212201 2800</li>
							<li>Europe,Middle East & Africa +44 20 7715 6200</li>
							<li>Asia Pacific +852 2730 0831</li>
							<li>Latin America +55 11 3372 7272</li>
						</ul>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div class="foot">
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript" src="scripts/script.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>