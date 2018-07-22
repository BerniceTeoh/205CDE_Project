<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'veecotech');

$company_name = "";
$email  = "";
$errors = array(); 



// REGISTER USER FOR ADMIN
if (isset($_POST['reg_user'])) {
  
  $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']); 

  if (empty($company_name)) { array_push($errors, "Company name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM companyinfo WHERE company_name='$company_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['company_name'] === $company_name) {
      array_push($errors,"Company name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

 
	if(count($errors)==0){
  	$password = md5($password1);

  	$query = "INSERT INTO companyinfo (company_name, email, password) 
  			  VALUES('$company_name', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['company_name'] = $company_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
	}
}
// REGISTER USER 
if (isset($_POST['reg_company'])) {
  
  $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']); 

  if (empty($company_name)) { array_push($errors, "Company name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM customerinfo WHERE company_name='$company_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['company_name'] === $company_name) {
      array_push($errors,"Company name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

 
	if(count($errors)==0){
  	$password = md5($password1);

  	$query = "INSERT INTO customerinfo (company_name, email, password) 
  			  VALUES('$company_name', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['company_name'] = $company_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homeCust.php');
	}
}

// ADMIN LOGIN 
if (isset($_POST['login_admin'])) {
  $adminName = mysqli_real_escape_string($db, $_POST['adminName']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($adminName)) {
  	array_push($errors, "Admin name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM signup WHERE adminName='$adminName' AND password='$password'";
  	$results = mysqli_query($db, $query);
  }
  if(mysqli_num_rows($results)==1) {
  	  $_SESSION['adminName'] = $adminName;
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong admin name or password");
  	}
  }
  
  
  // LOGIN USER
if (isset($_POST['login_user'])) {
  $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($company_name)) {
  	array_push($errors, "Company name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM companyinfo WHERE company_name='$company_name' AND password='$password'";
  	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1) {
  	  $_SESSION['company_name'] = $company_name;
  	  header('location: homeCust.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



?>