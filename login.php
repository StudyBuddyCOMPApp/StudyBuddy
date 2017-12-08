<?php 
include 'server2.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="StudyBuddy.css">
</head>
<body>
  <div class = "login-block">
    <h1> Welcome to your Study Buddy App! </h1>
    <h1> Login to find other students in your classes!</h1>
    <form method="post" action="login.php">
     <?php include('errors.php'); ?>
<div class="input-group">
      
      <input type="text" value= "" placeholder = "Email" name="email" id = "email">
    </div>
    <div class="input-group">
     
      <input type="password" value="" placeholder="Password" name="password" id = "password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>





     <!-- <input type="text" value="" placeholder="Email" id="email" />
     <input type="password" value="" placeholder="Password" id="password" />
     <button type="submit" class="btn" name="login_user">Submit</button> -->
     <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>
</body>

</html>