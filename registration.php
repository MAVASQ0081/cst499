<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-sm-3">
  <div class="header">
  	<h1>Student Registration</h1>
    <h6>Please fill in each field on this form</h6>
  </br>

  </div>

  <form method="post" action="registration.php">
  	<div class="input-group">
  	  <label for="email"><b>Email</label>
  	  <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  </br>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input class="form-control" type="password" name="password_1" value="<?php echo $password; ?>">
  	</div>
  </br>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input class="form-control" type="password" name="password_2">
  	</div>
  </br>
    <div class="input-group">
      <label>First Name</label>
      <input class="form-control" type="firstName" name="firstName" value="<?php echo $firstName; ?>">
    </div>
  </br>
    <div class="input-group">
      <label>Last Name</label>
      <input class="form-control" type="lastName" name="lastName" value="<?php echo $lastName; ?>">
    </div>
  </br>
    <div class="input-group">
      <label>Address</label>
      <input class="form-control" type="address" name="address" value="<?php echo $address; ?>">
    </div>
  </br>
    <div class="input-group">
      <label>Phone Number</label>
      <input class="form-control" type="phone" name="phone" value="<?php echo $phone; ?>">
    </div>
  </br>
    <div class="input-group">
      <label>Salary</label>
      <input class="form-control" type="salary" name="salary" value="<?php echo $salary; ?>">
    </div>
  </br>
    <div class="input-group">
      <label>SSN</label>
      <input class="form-control" type="SSN" name="SSN" value="<?php echo $SSN; ?>">
    </div>
  </br>

  	<div class="input-group">
  	  <a href="login.php" button class= "btn btn-primary" type="submit" class="btn" name="reg_user">Sign Up</button></a>
  	</div>
  </br>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </br>
  </br>
  </br>
  </form>
</body>
</html>
