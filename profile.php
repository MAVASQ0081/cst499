
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <div class="container">
    <div class="col-sm-3">
    <div class="header">
  		<h1>Profile Page</h1>
  	<div>
    	 	<h6>Your account details are below:</h6>
        <br>
        <h5>Email:</h5>
        <td><?=$email['email']?></td>
       <br>
        <h6>Password:</h6>
        <td><?=$password['password']?></td>
       <br>
				<h6>First Name:</h6>
				<td><?=$firstName['First Name']?></td>
       <br>
				<h6>Last Name:</h6>
				<td><?=$lastName['Last Name']?></td>
       <br>
				<h6>Address:</h6>
				<td><?=$address['Address']?></td>
       <br>
        <h6>Phone Number:</h6>
        <td><?=$phone['Phone Number']?></td>
       <br>
        <h6>Salary:</h6>
        <td><?=$salary['Salary']?></td>
       <br>
        <h6>SSN:</h6>
        <td><?=$SSN['SSN']?></td>
      </div>
      <br>
     <div class="input-group">
     <a href="index.php"><button class= "btn btn-primary" type="submit" class="btn" name="reg_user">Logout</button>
     <div>
    </p>
  </form>
</body>
</html>
