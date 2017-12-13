<?php 
include 'server2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Study Resources </title>
	<link rel="stylesheet" type="text/css" href="StudyBuddy.css" />
</head>
<body>
	<div class="background">
		<div class="header">
			<div>
			<img src = "logo.png" style="width:30%;height:60%;" alt = "LOGO">
			</div>
		
		<div class="cssmenu">
			<ul>
				<li> <a href ="Profile.php"> My Profile </a></li>
				<li > <a href="AddClass.php"> Add Classes</a></li>
				<li> <a href="FindBuddy.php">Find Buddy</a></li>
				<li class ='active'> <a href="Resources.php">Study Resources</a></li>
				<li> <a href="index.php?logout='1'" style="color: red;">Logout</a> </li>
			</ul>
			
		</div>

		<div class="aside_div">
			<aside>
				<table >	
					<tr>
						<th> <h2>Help Centers<h2> </th>
					</tr>
					<tr> 
						<td> <a href="https://math.unc.edu/undergraduate/math-help-center/"> Math/Physics Help Center </a></td>
					</tr>
					<tr>
						<td> <a href= "https://writingcenter.unc.edu/"> Writing Center </a></td>
					</tr>
					<tr>
						<td> <a href = "http://bio.unc.edu/undergraduate/course-info/tutoring/"> Biology Peer Mentoring </a></td>
					</tr>
					<tr> 
						<td> <a href = "http://learningcenter.unc.edu/services/peer-tutoring/"> Peer Tutoring for All Subjects </a></td>
					</tr>
				</table>
			</aside>
			
			<div class = "resources">
				<table>
					<tr>
						<th colspan="2"><h2> Study Locations</h2> </th>
					</tr>
					<tr>
						<td> Davis Library <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.467625182692!2d-79.05024904947592!3d35.911052324843936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc298cddcfb5b%3A0x1a5444d4c158a549!2sDavis+Library!5e0!3m2!1sen!2sus!4v1513189875127" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe></td>
						<td>  Wilson Library <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.5332977182175!2d-79.05194949947598!3d35.90944437493274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc2e919cc7e0b%3A0xc2718420693b9d7a!2sWilson+Library%2C+Chapel+Hill%2C+NC+27514!5e0!3m2!1sen!2sus!4v1513190332840" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe></td>
					</tr>
					<tr>
						<td> Undergraduate Library <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.519613682336!2d-79.05115764947593!3d35.90977942491411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc2e924a68bfd%3A0x6940f882485bd717!2sRobert+B.+House+Undergraduate+Library!5e0!3m2!1sen!2sus!4v1513190197053" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe> </td>
						<td> Student Union <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.499315117846!2d-79.0499179494759!3d35.91027642488671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc2e97fb6e6d5%3A0x6575f308840822a4!2sCarolina+Union!5e0!3m2!1sen!2sus!4v1513190267331" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe> </td>
					</tr>
					<tr>
						<td> Health Sciences Library <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.686904009555!2d-79.05503274951865!3d35.9056831800452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc2e8abfaeb27%3A0x216b16da7887acec!2sHealth+Sciences+Library!5e0!3m2!1sen!2sus!4v1513191009198" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe> </td>
						<td> Graham Memorial <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.3428362539203!2d-79.05380164951838!3d35.91410753004316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acc2c29779e165%3A0xcfcae03a6d0282ab!2sGraham+Memorial%2C+Chapel+Hill%2C+NC+27514!5e0!3m2!1sen!2sus!4v1513191080745" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe> </td>
					</tr>
				</table>
			</div>
			<aside>
				<iframe src="https://calendar.google.com/calendar/embed?src=nrasqpddv37e4e5o7ci6m37rq4%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
			</aside>

		</div>
	</div>
</body>
</html>

