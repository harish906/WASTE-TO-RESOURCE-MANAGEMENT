<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$Aadhaar = "";
$email = "";
$username = "";
$password = "";
$age = "";
$address = "";
$phoneCode="";
$num = "";
$gender="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $Aadhaar = mysqli_real_escape_string($db, $_POST['Aadhaar']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phoneCode = mysqli_real_escape_string($db, $_POST['phoneCode']);
  $num = mysqli_real_escape_string($db, $_POST['num']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "fname is required"); }
  if (empty($lname)) { array_push($errors, "lname is required"); }
  if (empty($Aadhaar)) { array_push($errors, "Aadhaar is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($password)) { array_push($errors, "password is required"); }
  if (empty($age)) { array_push($errors, "age is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($num)) { array_push($errors, "num is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  
  
  $user_check_query = "SELECT * FROM public WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
	if ($user['Aadhaar'] === $Aadhaar) {
      array_push($errors, "Aadhaar already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$sql = "INSERT INTO public (fname, lname, Aadhaar, email, username, password, age, address, phoneCode, num, gender) 
  			  VALUES('$fname', '$lname', '$Aadhaar', '$email',  '$username', '$password', '$age', '$address', '$phoneCode', '$num', '$gender')";
  	mysqli_query($db, $sql);
	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: publiclogin.php');
  	}
}

  if(isset($_POST['Log_In']))
	{
		$username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($username)) { array_push($errors, "username is required"); }
        if (empty($password)) { array_push($errors, "password is required"); }
		
		 if(count($errors)==0)
		 {
			 
			 $query = "SELECT *FROM public WHERE username='$username' AND password='$password'";
			 $result = mysqli_query($db,$query);
			 if(mysqli_num_rows($result) == 1)
			 {
				 $_SESSION['username'] = $username;
  	             $_SESSION['success'] = "You are now logged in";
  	             header('location: publiclogin.php');
			 }
			 else{
  		          array_push($errors,"Wrong username/password combination");
				 
			 }
        }
	}
	if(isset($_GET['logout']))
	 {
		 session_destroy();
		 unset($SESSION['usernmae']);
		 header('location:login.php');
	 }
	
  
  
    
	 
	 
?>