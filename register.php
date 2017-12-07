<?php 
include 'server2.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="StudyBuddy.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>">
  	</div>
		<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName" value="<?php echo $lastName; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
		<div class="input-group">
  	  <label>Major</label>
  	  <input type="text" name="major" value="<?php echo $major; ?>">
  	</div>
		<div class="input-group">
  	  <label>Year</label>
  	  <input type="text" name="year" value="<?php echo $year; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>