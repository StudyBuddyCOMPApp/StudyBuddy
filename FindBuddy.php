<?php 
include 'server2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Find Buddy </title>
	<link rel="stylesheet" type="text/css" href="StudyBuddy.css" />
</head>
<body>
	<div class="background">
		<div class="header">
			<h1 id="title">Find Your Study Buddy!</h1>
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
			<?php 
			echo "LOOK AT ME NOW";
			echo $_SESSION['email'];
			echo "Student id: " . $_SESSION['id'];
			?>
		</div>
		<div>
			<table class= "classes">
				<tr>
					<td> 
						Class 1
						<ul> the list goes here </ul>
					 </td>
					<td> Class 2</td>
					<td> Class 3 </td>
					<td> Class 4 </td>
					<td> Class 5 </td>
					<td> Class 6 </td>
				</tr>
				
			
					
						
		</div>
	</div>
</body>
</html>

