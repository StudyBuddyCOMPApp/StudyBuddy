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
			<div>
			<img src = "logo.png" style="width:30%;height:60%;" alt = "LOGO">
			<div>
		</div>
		<div>
			<div class="cssmenu">
				<ul>
					<li> <a href ="Profile.php"> My Profile </a></li>
					<li > <a href="AddClass.php"> Add Classes</a></li>
					<li class ='active'> <a href="FindBuddy.php">Find Buddy</a></li>
					<li> <a href="Resources.php">Study Resources</a></li>
					<li> <a href="index.php?logout='1'" style="color: red;">Logout</a> </li>
				</ul>

			
				<?php

				$user_email = $_SESSION['email'];



				$query = "SELECT * FROM users WHERE email = '$user_email'";
				if($results = mysqli_query($db, $query)){

				}
				while($row = mysqli_fetch_array($results)){  
				$class1 = $row['c1_id']; 
				$class2 = $row['c2_id'];
				$class3 = $row['c3_id']; 
				$class4 = $row['c4_id'];
				$class5 = $row['c5_id'];
				$class6 = $row['c6_id'];

				}


				?>

			</div>
		</div>
<div class= "classes">
	<?php 
	$db = mysqli_connect('classroom.cs.unc.edu', 'renfro18', '010896sr!', 'renfro18db');
	if ($db->connect_error) {
		printf("Connect failed: %s\n", $db->connect_error);
		echo "Connection fail";
		exit();
	}	
	$sql = "SELECT * FROM Class WHERE id = '$class1'";
	if($result1 = mysqli_query($db, $sql)){
	}

	if($class1 == NULL){
		$message = "You are not registered for another class.";
		echo "<table>"; 
		echo "<tr><td>" . $message . "</td></tr>";

	}else{
		$query = "SELECT * FROM users WHERE (c1_id = '$class1' OR c2_id = '$class1' OR c3_id = '$class1' OR c4_id = '$class1' OR c5_id = '$class1' OR c6_id = '$class1') AND email != '$user_email'";

		if($result = mysqli_query($db, $query)){
			if($result->num_rows == 0){
				$message = "Sorry! No students are registered for this class.";
			}else{
				$message = NULL;
			}
		}
			echo "<table>"; // start a table tag in the HTML
			$row1 = mysqli_fetch_array($result1);
			echo "<tr> <td><h1>" . $row1['dept'] . " " . $row1['class_num'] . "</h1></td></tr>"; 

			while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
				$email = $row['email'];
				echo "<tr><td>" . $row['firstName'] . "<br>" . "<a href='mailto:" . $email . "?Subject=Need%20%20A%20Study%20Buddy?' target='_top'>" . $row['email'] . "</a>" . "</td></tr>";  
			}
			echo "<tr><td>" . $message . "</td></tr>";
			echo "</table>"; 
			}//Close the table in HTML
			?>
		</div>



		<div class= "classes">
			<?php 


			$sql = "SELECT * FROM Class WHERE id = '$class2'";
			if($result1 = mysqli_query($db, $sql)){
			}
			if($class2 == NULL){
				$message = "You are not registered for another class.";
				echo "<table>"; 
				echo "<tr><td>" . $message . "</td></tr>";

			}else{
				$query = "SELECT * FROM users WHERE (c1_id = '$class2' OR c2_id = '$class2' OR c3_id = '$class2' OR c4_id = '$class2' OR c5_id = '$class2' OR c6_id = '$class2') AND email != '$user_email'";

				if($result = mysqli_query($db, $query)){
					if($result->num_rows == 0){
						$message = "Sorry! No students are registered for this class.";
					}else{
						$message = NULL;
					}
				}
				echo "<table>"; // start a table tag in the HTML

				$row1 = mysqli_fetch_array($result1);
				echo "<tr> <td><h1>" . $row1['dept'] . " " . $row1['class_num'] . "</h1></td></tr>"; 
				while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
					$email = $row['email'];
					echo "<tr><td>" . $row['firstName'] . "<br>" . "<a href='mailto:" . $email . "?Subject=Need%20%20A%20Study%20Buddy?' target='_top'>" . $row['email'] . "</a>" . "</td></tr>";//$row['index'] the index here is a field name
				}
				echo "<tr><td>" . $message . "</td></tr>";
				echo "</table>";
			} //Close the table in HTML
			?>
		</div>

		<div class= "classes">
			<?php 

			$sql = "SELECT * FROM Class WHERE id = '$class3'";
			if($result1 = mysqli_query($db, $sql)){
			}

			if($class3 == NULL){
				$message = "You are not registered for another class.";
				echo "<table>"; 
				echo "<tr><td>" . $message . "</td></tr>";

			}else{
				$query = "SELECT * FROM users WHERE (c1_id = '$class3' OR c2_id = '$class3' OR c3_id = '$class3' OR c4_id = '$class3' OR c5_id = '$class3' OR c6_id = '$class3') AND email != '$user_email'";

				if($result = mysqli_query($db, $query)){
					if($result->num_rows == 0){
						$message = "Sorry! No students are registered for this class.";
					}else{
						$message = NULL;
					}
				}
				echo "<table>"; // start a table tag in the HTML
				$row1 = mysqli_fetch_array($result1);
				echo "<tr> <td><h1>" . $row1['dept'] . " " . $row1['class_num'] . "</h1></td></tr>"; 

				while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
					$email = $row['email'];
					echo "<tr><td>" . $row['firstName'] . "<br>" . "<a href='mailto:" . $email . "?Subject=Need%20%20A%20Study%20Buddy?' target='_top'>" . $row['email'] . "</a>" . "</td></tr>";
				}
				echo "<tr><td>" . $message . "</td></tr>";
				echo "</table>";
			} //Close the table in HTML
			?>
		</div>

		


		<div class= "classes">
			<?php 

			$sql = "SELECT * FROM Class WHERE id = '$class4'";
			if($result1 = mysqli_query($db, $sql)){
			}

			if($class4 == NULL){
				$message = "You are not registered for another class.";
				echo "<table>"; 
				echo "<tr><td>" . $message . "</td></tr>";

			}else{
				$query = "SELECT * FROM users WHERE (c1_id = '$class4' OR c2_id = '$class4' OR c3_id = '$class4' OR c4_id = '$class4' OR c5_id = '$class4' OR c6_id = '$class4') AND email != '$user_email'";

				if($result = mysqli_query($db, $query)){
					if($result->num_rows == 0){
						$message = "Sorry! No students are registered for this class.";
					}else{
						$message = NULL;
					}
				}
				echo "<table>"; // start a table tag in the HTML
				$row1 = mysqli_fetch_array($result1);
				echo "<tr> <td><h1>" . $row1['dept'] . " " . $row1['class_num'] . "</h1></td></tr>"; 
				
				while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
					$email = $row['email'];
					echo "<tr><td>" . $row['firstName'] . "<br>" . "<a href='mailto:" . $email . "?Subject=Need%20%20A%20Study%20Buddy?' target='_top'>" . $row['email'] . "</a>" . "</td></tr>";
				}
				echo "<tr><td>" . $message . "</td></tr>";
				echo "</table>"; 
			}//Close the table in HTML
			?>
		</div>



		<div class= "classes">
			<?php 

			$sql = "SELECT * FROM Class WHERE id = '$class5'";
			if($result1 = mysqli_query($db, $sql)){
			}

			if($class5 == NULL){
				$message = "You are not registered for another class.";
				echo "<table>"; 
				echo "<tr><td>" . $message . "</td></tr>";

			}else{

				$query = "SELECT * FROM users WHERE (c1_id = '$class5' OR c2_id = '$class5' OR c3_id = '$class5' OR c4_id = '$class5' OR c5_id = '$class5' OR c6_id = '$class5') AND email != '$user_email'";

				if($result = mysqli_query($db, $query)){
					if($result->num_rows == 0){
						$message = "Sorry! No students are registered for this class.";
					}else{
						$message = NULL;
					}
				}
				echo "<table>"; // start a table tag in the HTML
				$row1 = mysqli_fetch_array($result1);
				echo "<tr> <td><h1>" . $row1['dept'] . " " . $row1['class_num'] . "</h1></td></tr>"; 

				while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
					$email = $row['email'];
					echo "<tr><td>" . $row['firstName'] . "<br>" . "<a href='mailto:" . $email . "?Subject=Need%20%20A%20Study%20Buddy?' target='_top'>" . $row['email'] . "</a>" . "</td></tr>";
				}
				echo "<tr><td>" . $message . "</td></tr>";
				echo "</table>"; //Close the table in HTML
			}
			?>
		</div>


		


	</div>
</body>
</html>

