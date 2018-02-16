<?php 
include 'server2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="StudyBuddy.css" />
</head>
<body>
	<div class="background">
		<div class="header">
			<div>
			<img src = "logo.png" style="width:30%;height:60%;" alt = "LOGO">
			<div>
		</div>
		<div>
			<div class="cssmenu">
				<ul>
					<li class ='active'> <a href ="Profile.php"> My Profile </a></li>
					<li > <a href="AddClass.php"> Add Classes</a></li>
					<li > <a href="FindBuddy.php">Find Buddy</a></li>
					<li> <a href="Resources.php">Study Resources</a></li>
					<li> <a href="index.php?logout='1'" style="color: red;">Logout</a> </li>
				</ul>
			
		</div>
</div>

		<div>
			<div class="profile">
			<table>
				<tr>
					<td>
						<h2>Full Name</h2>
						<ul>
							<li>Major:<li>
							<li>Year:<li>
						</ul>
					</td>
					<td>
						<h2>My Schedule</h2>
						<table>Classes go here</table>
					</td>
				</tr>
			</table>
		</div>
		</div>
	
</body>
</html>

