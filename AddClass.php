<?php 
include 'server2.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Add Class </title>
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
						<a href="Profile.html"> My Profile</a>
					</td>
					<td class="nav">
						<a href="AddClass.html"> Add Classes</a>
					</td>
					<td class="nav">
						<a href="FindBuddy.html">Find Buddy</a>
					</td>
					<td class="nav">
						<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
					</td>
				</tr>
			</table>
		</div>
		<form method = "post" action="AddClass.php">
		<div class = "class-block">
			<table class="classes">
				<tr>
					<td> Department </td>
					<td> Class ID </td>
					<td> Professor's Last Name </td>
				</tr>
				<tr> 
					<td><input type="text" name="class1_dp" placeholder= "BIOL" value= "<?php echo $class1_dp; ?>" ></td>
					<td> <input type="text" name="class1_id" placeholder= "101" value="<?php echo $class1_id; ?>" ></td>
					<td><input type="text" name="class1_prof" placeholder= "Evans" value= "<?php echo $class1_prof; ?>" ></td>
				</tr>
				<tr> 
					<td><input type="text" name="class2_dp" placeholder= "BIOL" value= "<?php echo $class2_dp; ?>" ></td>
					<td> <input type="text" name="class2_id" placeholder= "101" value="<?php echo $class2_id; ?>" ></td>
					<td><input type="text" name="class2_prof" placeholder= "Evans" value= "<?php echo $class2_prof; ?>" ></td>
				</tr>
				<tr> 
					<td><input type="text" name="class3_dp" placeholder= "BIOL" value= "<?php echo $class3_dp; ?>" ></td>
					<td> <input type="text" name="class3_id" placeholder= "101" value="<?php echo $class3_id; ?>" ></td>
					<td><input type="text" name="class3_prof" placeholder= "Evans" value= "<?php echo $class3_prof; ?>" ></td>
				</tr>
			</table>
			<button type="submit" class="btn" name="add_classes">Add Classes!</button>
			<!--Put page info here -->
		</div>
		</form>
	</div>
</body>
</html>