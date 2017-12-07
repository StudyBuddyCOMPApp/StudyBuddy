<?php
session_start();

// variable declaration

$firstName = "";
$email    = "";
$lastName = "";
$year ="";
$major="";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('classroom.cs.unc.edu', 'renfro18', '010896sr!', 'renfro18db');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $major= mysqli_real_escape_string($db, $_POST['major']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($firstName)||empty($lastName) ) { array_push($errors, "First Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($year)) { array_push($errors, "Year is required"); }
  if (empty($major)) { array_push($errors, "Major is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (firstName,lastName,email,major,year, password) 
  			  VALUES('$firstName', '$lastName','$email', '$major','$year','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }

}
if (isset($_POST['login_user'])) {
  $email= mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>