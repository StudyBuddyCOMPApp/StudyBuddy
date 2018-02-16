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
<?php
		
		$db = mysqli_connect('classroom.cs.unc.edu', 'renfro18', '010896sr!', 'renfro18db');
				$user_email = $_SESSION['email'];



				$query = "SELECT * FROM users WHERE email = '$user_email'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
				$major = $row['major']; 
				$year= $row['year'];
				$firstName = $row['firstName']; 
				$lastName = $row['lastName'];
				$name = $firstName . ' ' . $lastName;
				$class1 = $row['c1_id']; 
				$class2 = $row['c2_id'];
				$class3 = $row['c3_id']; 
				$class4 = $row['c4_id'];
				$class5 = $row['c5_id'];
				$class6 = $row['c6_id'];

				
				
		
				}


				?>
				<?php
		
		$db = mysqli_connect('classroom.cs.unc.edu', 'renfro18', '010896sr!', 'renfro18db');
				$user_email = $_SESSION['email'];



				$query = "SELECT * FROM users WHERE email = '$user_email'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
				$major = $row['major']; 
				$year= $row['year'];
				$firstName = $row['firstName']; 
				$lastName = $row['lastName'];
				$name = $firstName . ' ' . $lastName;
				$class1 = $row['c1_id']; 
				$class2 = $row['c2_id'];
				$class3 = $row['c3_id']; 
				$class4 = $row['c4_id'];
				$class5 = $row['c5_id'];
				$class6 = $row['c6_id'];

				
				
		
				}


				?>
		<?php
		
		$db = mysqli_connect('classroom.cs.unc.edu', 'renfro18', '010896sr!', 'renfro18db');
				$user_email = $_SESSION['email'];



				$query = "SELECT * FROM Class WHERE id = '$class1'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  

				$class1_dept = $row['dept']; 
				$class1_num = $row['class_num'];
				$class1_pro = $row['professor']; 
			
				}
				
				$query = "SELECT * FROM Class WHERE id = '$class2'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
					$class2_dept = $row['dept']; 
					$class2_num = $row['class_num'];
					$class2_pro = $row['professor']; 

				}
			
				$query = "SELECT * FROM Class WHERE id = '$class3'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
					$class3_dept = $row['dept']; 
					$class3_num = $row['class_num'];
					$class3_pro = $row['professor']; 

				}
				$query = "SELECT * FROM Class WHERE id = '$class4'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
					$class4_dept = $row['dept']; 
					$class4_num = $row['class_num'];
					$class4_pro = $row['professor']; 

				}
				$query = "SELECT * FROM Class WHERE id = '$class5'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
					$class5_dept = $row['dept']; 
					$class5_num = $row['class_num'];
					$class5_pro = $row['professor']; 

				}
				$query = "SELECT * FROM Class WHERE id = '$class6'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
					$class6_dept = $row['dept']; 
					$class6_num = $row['class_num'];
					$class6_pro = $row['professor']; 

				}
				
				
				
				
				?>
				
		<div>
			<div class="profile">
			<table>
				<tr>
					<td>
						<h2><?php echo $name;?></h2>
						
							<h3>Major: <?php echo $major;?></h3>
							<h4>Year: <?php echo $year;?></h4>
						
					</td>
					</table>

					
						<h2>My Schedule</h2>
						<?php
						echo "<table>";
						if($class1 == null)
						{
							echo "<h1> <td><tr> You haven't entered your classes, click the add classes tab above!</h1></td></tr>";
						
						}
						else
						{
						
						echo "<h1> <td><tr>" . $class1_dept . " " . $class1_num . " with ". $class1_pro . "</h1></td></tr>";
						
						}
						if($class2 !=null)
						{
							echo "<h1> <td><tr>" . $class2_dept . " " . $class2_num . " with ". $class2_pro . "</h1></td></tr>";

						}
						if($class3 !=null)
						{
							echo "<h1> <td><tr>" . $class3_dept . " " . $class3_num . " with ". $class3_pro . "</h1></td></tr>";

						}
						if($class4 !=null)
						{
							echo "<h1> <td><tr>" . $class4_dept . " " . $class4_num . " with ". $class4_pro . "</h1></td></tr>";

						}
						if($class5 !=null)
						{
							echo "<h1> <td><tr>" . $class5_dept . " " . $class5_num . " with ". $class5_pro . "</h1></td></tr>";

						}
						
						echo "</table>";
						?>
					
				</tr>
		</div>
		</div>
	
</body>
</html>

