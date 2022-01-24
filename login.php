<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-sm-3">
  <div class="header">
  	<h1>Student Login</h1>
    <h6>Please enter Username and Password</h6>
</br>
  </div>

  <form method="post" action="login.php">
  	<div class="input-group">
      <i class="fas fa-user"></i><space>
  		<label>Username</label>
  	  <input class="form-control" type="username" name="username" value="<?php echo $email; ?>">
  	</div>
  </br>
  	<div class="input-group">
    	<i class="fas fa-lock"></i><space>
  		<label>Password</label>
  	  <input class="form-control" type="password" name="password" value="<?php echo $email; ?>">
  	</div>
  </br>
  	<div class="input-group">
      <a href="profile.php" button class= "btn btn-primary" type="submit" class="btn" name="login_user">Login</button></a>
  	</div>
  </br>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
