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
//$_SESSION['id'] = "";
$student_id = "";

$c1_id ="";
$class1_dp = "";
$class1_id = "";
$class1_prof = "";


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

    $sql = "SELECT * FROM users WHERE email='$email' AND lastName = '$lastName'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $student_id = $row["id"];
   //$student_id = $db->insert_id;
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    $_SESSION['id']= $student_id;
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

     $row = mysqli_fetch_assoc($result);
     $student_id = $row["id"]; 

     echo "WHERE WE AT: ";
     $_SESSION['id']= 1;


     //$sql = "SELECT id FROM users WHERE email='$email' AND password='$password'";
     //$student_id = mysqli_query($db, $sql);



     header('location: index.php');
   }else {
    array_push($errors, "Wrong email/password combination");
  }
}
}
//Add Classes
if (isset($_POST['add_classes'])) {
  // receive all input values from the form
  $class1_dp = strtoupper( mysqli_real_escape_string($db, $_POST['class1_dp']));
  $class1_id = mysqli_real_escape_string($db, $_POST['class1_id']);
  $class1_prof = strtoupper(mysqli_real_escape_string($db, $_POST['class1_prof']));

  $class2_dp = strtoupper( mysqli_real_escape_string($db, $_POST['class2_dp']));
  $class2_id = mysqli_real_escape_string($db, $_POST['class2_id']);
  $class2_prof = strtoupper(mysqli_real_escape_string($db, $_POST['class2_prof']));

  $class3_dp = strtoupper( mysqli_real_escape_string($db, $_POST['class3_dp']));
  $class3_id = mysqli_real_escape_string($db, $_POST['class3_id']);
  $class3_prof = strtoupper(mysqli_real_escape_string($db, $_POST['class3_prof']));
  

  //CREATE CHECK FOR ERRORS HERE

  $duplicate = "SELECT * FROM Class WHERE dept = '$class1_dp' AND class_num= '$class1_id' AND professor = '$class1_prof'";
  if($result = mysqli_query($db, $duplicate)){
    if($result->num_rows == 0){
      $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class1_dp', '$class1_id', '$class1_prof')";
      mysqli_query($db, $query);
      $c1_id = $db->insert_id;
    }else{
      echo "CLASS ALREADY EXISTS!";
      $row = mysqli_fetch_assoc($result);
      $c1_id = $row["id"];
    }
  }
  $student_id= $_SESSION['id'];
  

  $sql = "UPDATE users SET c1_id = '$c1_id' WHERE id = '$student_id'";

  if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
  } else {
    //echo "Error updating record: " . $db->error;
  }

  if(!empty($class2_dp)){
    $duplicate = "SELECT * FROM Class WHERE dept = '$class2_dp' AND class_num= '$class2_id' AND professor = '$class2_prof'";
    if($result = mysqli_query($db, $duplicate)){
      if($result->num_rows == 0){
        $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class2_dp', '$class2_id', '$class2_prof')";
        mysqli_query($db, $query);
        $c2_id = $db->insert_id;
      }else{
        echo "CLASS ALREADY EXISTS!";
        $row = mysqli_fetch_assoc($result);
        $c2_id = $row["id"];
      }
    }
    $student_id= $_SESSION['id'];


    $sql = "UPDATE users SET c2_id = '$c2_id' WHERE id = '$student_id'";

    if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
    } else {
    //echo "Error updating record: " . $db->error;
    }


  }

  if(!empty($class3_dp)){

    $duplicate = "SELECT * FROM Class WHERE dept = '$class3_dp' AND class_num= '$class3_id' AND professor = '$class3_prof'";
    if($result = mysqli_query($db, $duplicate)){
      if($result->num_rows == 0){
        $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class3_dp', '$class3_id', '$class3_prof')";
        mysqli_query($db, $query);
        $c3_id = $db->insert_id;
      }else{
        echo "CLASS ALREADY EXISTS!";
        $row = mysqli_fetch_assoc($result);
        $c3_id = $row["id"];
      }
    }
    $student_id= $_SESSION['id'];


    $sql = "UPDATE users SET c3_id = '$c3_id' WHERE id = '$student_id'";

    if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
    } else {
    //echo "Error updating record: " . $db->error;
    }
  }

  
  $duplicate = "SELECT * FROM Class WHERE dept = '$class4_dp' AND class_num= '$class4_id' AND professor = '$class4_prof'";
  if($result = mysqli_query($db, $duplicate)){
    if($result->num_rows == 0){
      $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class4_dp', '$class4_id', '$class4_prof')";
      mysqli_query($db, $query);
      $c4_id = $db->insert_id;
    }else{
      $row = mysqli_fetch_assoc($result);
      $c4_id = $row["id"];
    }
  }
  $student_id= $_SESSION['id'];
  

  $sql = "UPDATE users SET c4_id = '$c4_id' WHERE id = '$student_id'";

  if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
  } else {
    //echo "Error updating record: " . $db->error;
  }

  $duplicate = "SELECT * FROM Class WHERE dept = '$class5_dp' AND class_num= '$class5_id' AND professor = '$class5_prof'";
  if($result = mysqli_query($db, $duplicate)){
    if($result->num_rows == 0){
      $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class5_dp', '$class5_id', '$class5_prof')";
      mysqli_query($db, $query);
      $c5_id = $db->insert_id;
    }else{
      $row = mysqli_fetch_assoc($result);
      $c5_id = $row["id"];
    }
  }
  $student_id= $_SESSION['id'];
  

  $sql = "UPDATE users SET c5_id = '$c5_id' WHERE id = '$student_id'";

  if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
  } else {
    //echo "Error updating record: " . $db->error;
  }

  $duplicate = "SELECT * FROM Class WHERE dept = '$class6_dp' AND class_num= '$class6_id' AND professor = '$class6_prof'";
  if($result = mysqli_query($db, $duplicate)){
    if($result->num_rows == 0){
      $query = "INSERT INTO Class (dept, class_num, professor) VALUES ('$class6_dp', '$class6_id', '$class6_prof')";
      mysqli_query($db, $query);
      $c6_id = $db->insert_id;
    }else{
      $row = mysqli_fetch_assoc($result);
      $c6_id = $row["id"];
    }
  }
  $student_id= $_SESSION['id'];
  

  $sql = "UPDATE users SET c6_id = '$c6_id' WHERE id = '$student_id'";

  if ($db->query($sql) === TRUE) {
    //echo "Record updated successfully";
  } else {
    //echo "Error updating record: " . $db->error;
  }

  
     header('location: FindBuddy.php');







}




?>