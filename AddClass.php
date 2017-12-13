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
			<div>
			<img src = "logo.png" style="width:30%;height:60%;" alt = "LOGO">
			</div>
			<!-- <h1 id="title">Add Class</h1> -->
		
		<div class="cssmenu">
			<ul>
				<li> <a href ="Profile.php"> My Profile </a></li>
				<li> <a href="AddClass.php"> Add Classes</a></li>
				<li class ='active'> <a href="FindBuddy.php">Find Buddy</a></li>
				<li> <a href="Resources.php">Study Resources</a></li>
				<li> <a href="index.php?logout='1'" style="color: red;">Logout</a> </li>
			</ul>




			<!-- <table class="toolbar">
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
						<a href="Resources.php">Study Resources</a>
					</td>
					<td class="nav">
						<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
					</td>
				</tr>
			</table> -->
		</div>
		</div>
		<form method = "post" action="AddClass.php">
		<div class = "class-block">
			<table >
				<tr>
					<td> <h1>Department </h1></td>
					<td><h1> Class ID</h1> </td>
					<td> <h1>Professor's Last Name </h1></td>
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
				<tr> 
					<td><input type="text" name="class4_dp" placeholder= "BIOL" value= "<?php echo $class4_dp; ?>" ></td>
					<td> <input type="text" name="class4_id" placeholder= "101" value="<?php echo $class4_id; ?>" ></td>
					<td><input type="text" name="class4_prof" placeholder= "Evans" value= "<?php echo $class4_prof; ?>" ></td>
				</tr>
				<tr> 
					<td><input type="text" name="class5_dp" placeholder= "BIOL" value= "<?php echo $class5_dp; ?>" ></td>
					<td> <input type="text" name="class5_id" placeholder= "101" value="<?php echo $class5_id; ?>" ></td>
					<td><input type="text" name="class5_prof" placeholder= "Evans" value= "<?php echo $class5_prof; ?>" ></td>
				</tr>
				<!-- <tr> 
					<td><input type="text" name="class6_dp" placeholder= "BIOL" value= "<?php echo $class6_dp; ?>" ></td>
					<td> <input type="text" name="class6_id" placeholder= "101" value="<?php echo $class6_id; ?>" ></td>
					<td><input type="text" name="class6_prof" placeholder= "Evans" value= "<?php echo $class6_prof; ?>" ></td>
				</tr> -->
			</table>
			<div class="add_button">
			<button type="submit" class = "add" name="add_classes"> Add Classes! </button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>