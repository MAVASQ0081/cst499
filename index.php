<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Class Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom,add color, and rounded borders */
    .navbar {
			background-color: #ADD8E6;
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add color and padding to the footer background */
    footer {
      background-color: #ADD8E6;
      padding: 25px;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Student Class Registration</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">
  <h3>Student Class Registration</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive" style="width:100%" alt="Image">
      <p>Project Picture/Link</p>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" style="width:100%" alt="Image">
      <p>Project Picture/Link</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Space for text..</p>
      </div>
      <div class="well">
       <p>Space for text..</p>
      </div>
    </div>
  </div>
</div><br>
<div class="container text-center">
  <h3>Student Class Registration</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive" style="width:100%" alt="Image">
      <p>Project Picture/Link</p>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" style="width:100%" alt="Image">
      <p>Project Picture/Link</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Space for text..</p>
      </div>
      <div class="well">
       <p>Space for text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p></p>
</footer>

</body>
</html>
