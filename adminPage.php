<?php session_start();
$_SESSION["form"]="admin";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Project_management</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/adminpage.css">
</head>
<body class="wrapper">
	
	<div class="wrapper" id="header">
		<span id="menhed"class="wrapper"><span id="hamburger">&#9776</span><span>Admin Page</span></span>
		<span class="wrapper" id="actadmin">
			<span id="admindetail" >
			<p><?php echo $_SESSION["proData"]["Name"]; ?></p>
			<p><?php echo $_SESSION["proData"]["email"]; ?></p>
			<p><?php echo $_SESSION["proData"]["mobileNo"]; ?></p>
			<p><?php echo $_SESSION["proData"]["TYPE"]; ?></p>
		</span>
		<span id=PPspan><img src="<?php echo 'database/images/'.$_SESSION['proData']['propic'];?>" id="propic"></span>
		</span>
	</div>
	
	<div class="wrapper " id="menu">
		<ul id="menu-list">
			<li><a href="index.php">Home</a></li>
			<li><a href="profile.php">Portfolio</a></li>
			<li><a>Magazine</a></li>
			<li><a href="database/db_connect.php?value=logout">Logout</a></li>
			<li><a>About</a></li>
		</ul>
	</div>
	
	<div class="wrapper" id="dashboard">
		<div class="wrapper-center" id="reglist">
			<h1 class="wrapper-center" style="width:100%; text-align: center; color:white; background:#01579B; margin:0; padding:0.8em;">Registration Requests</h1>
			<table id="studentList">
				<tr>
					
					<th>RegNumber</th>
					<th>Name</th>
					<th>DateOfBirth</th>
					<th>Email</th>
					<th>MobileNumber</th>
					<th>Address</th>
					<th>UserType</th>
					<th>ADD User</th>
				</tr>
		<?php if($_SESSION["regList"]){
					 foreach($_SESSION["regList"] as $User)
					{
						echo "<form method='POST' action='database/db_connect.php'>
								<input type='hidden' name='form' value='adduser'>
									<tr>

										<td><input type='hidden' name='regNo' value='".$User['regNo']."'>".$User['regNo']."</td>
										<td><input type='hidden' name='name' value='".$User['name']."'>".$User['name']."</td>
										<td><input type='hidden' name='DOB' value='".$User['DOB']."'>".$User['DOB']."</td>
										<td><input type='hidden' name='email' value='".$User['email']."'>".$User['email']."</td>
										<td><input type='hidden' name='mobileNo' value='".$User['mobileNo']."'>".$User['mobileNo']."</td>
										<td><input type='hidden' name='address' value='".$User['address']."'>".$User['address']."</td>
										<td>
										<select name='usertype' id='usertype2' required>
										<option selected=''>usertype</option>
										<option value=Admin>Admin</option>
										<option value=Faculty>Faculty</option>
										<option value='student'>Student</option>	
										</select>
										</td>
										<td><input type='submit' name='Addbtn' class='deletebtn addbtn' value='Add User' ></td>
									</tr>
								</form>";
					}}

		?>
	</table>
	</div>
		<div class="wrapper-center" id="board-list">
			<div class="wrapper-center" style="width:100%; text-align: center; color:white; background:#01579B; margin:0; padding:0.8em;"><h1>Users List</h1>
			<span id="add-srch-form" class="wrapper-center">
			<form id="srchuser" method="POST" action="database/db_connect.php" class="wrapper-center">
				<input type="hidden" name="form" value="srchuser" >
			</form>
				<input form="srchuser" type="hidden" name="name" placeholder="name" id="name">
				<input form="srchuser" type="hidden" name="regNo" placeholder="regNo" id="regNo">
				<input form="srchuser" type="hidden" name="email" placeholder="example@gmail.com" id="email">
			<select name="srch"  id="searchBy">
				<option selected="">search by</option>
				<option value="regNo">registration number</option>
				<option value="name">Name</option>
				<option value="email">Email id</option>
				<option value="type">show all</option>
			</select>
			<button type="submit" form="srchuser">Search</button>
		</span>
		</div>
			<table id="studentList2">
				<tr>
					<th></th>
					<th>RegNumber</th>
					<th>Name</th>
					<th>DateOfBirth</th>
					<th>Email</th>
					<th>MobileNumber</th>
					<th>Address</th>
					<th>UserType</th>
					<th>Delete user</th>
				</tr>
				<?php foreach($_SESSION["userList"] as $User)
					{
						echo "<form method='POST' action='database/db_connect.php'>
								<input type='hidden' name='form' value='deleteuser'>
								<tr>
									<td><img src='database/images/".$User['propic']."'id='propic'></td>
									<td><input type='hidden' name='regNo' value='".$User['RegNo']."'>".$User['RegNo']."</td>
									<td>".$User['Name']."</td>
									<td>".$User['DOB']."</td>
									<td>".$User['email']."</td>
									<td>".$User['mobileNo']."</td>
									<td>".$User['address']."</td>
									<td>".$User['TYPE']."</td>
									<td><input type='submit' name='deletebtn' class='deletebtn' value='deleteUser'></td>
								</tr>
							</form>";
					}

				?>
			</table>
		</div>
	</div>

</body>

<script type="text/javascript" src="scripts/index.js"></script>
</html>