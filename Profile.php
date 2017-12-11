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
			<h1 id="title">Study Buddy</h1>
		</div>
		<div>
			<table class="toolbar">
				<tr>
					<td class="nav">
						<a href="Profile.php"> My Profile</a>
					</td>
					<td class="nav">
						<a href="AddClass.php"> Add Classes</a>
					</td>
					<td class="nav">
						<a href="FindBuddy.php">Find Buddy</a>
					</td>
					<td class="nav">
						<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
					</td>
				</tr>
			</table>
			
		</div>
		<div>
			<!--Put page info here -->
		</div>
	</div>
</body>
</html>

