<?php 
include 'server2.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="StudyBuddy.css">
</head>
<body>
  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class = "login-block" id= "Register">
    <h1> Register with Study Buddy! </h1>
    <div class="input-group">
  	  <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
  	</div>
		<div class="input-group">
  	  
  	  <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
  	</div>
  	<div class="input-group">
  	
  	  <input type="email" name="email"  placeholder= "Email" value="<?php echo $email; ?>">
  	</div>
		<div class="input-group">
  	  
  	  <input type="text" name="major" placeholder="Major" value="<?php echo $major; ?>">
  	</div>
		<div class="input-group">
  	 
  	  <input type="text" name="year" placeholder= "Year" value="<?php echo $year; ?>">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="password"  placeholder = "Password" name="password_1">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="password" placeholder="Confirm Password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
</body>
</html>