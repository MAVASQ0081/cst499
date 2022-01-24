<?php include("registration.php")
    $email      = "";
    $password      = "";
    $firstName  = "";
    $lastName   = "";
    $address    = "";
    $phone      = "";
    $salary     = "";
    $SSN        = "";
    // Create connection
$db = mysqli_connect('localhost:', 'root', 'Stephjendev1!', 'empolyeePortal');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $SSN = mysqli_real_escape_string($db, $_POST['SSN']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($firstName)) { array_push($errors, "First Name is required"); }
  if (empty($lastName)) { array_push($errors, "Last Name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if (empty($salary)) { array_push($errors, "Salary is required"); }
  if (empty($SSN)) { array_push($errors, "SSN is required"); }
  }

  // first check the database to make sure
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM tblUser WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);


    if ($tblUser['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO tblUser (email, password, firstName, lastName, address, phone, salary, SSN)
  			  VALUES('$email', '$password', '$firstName', '$lastName', '$address', '$phone', '$salary', '$SSN')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
