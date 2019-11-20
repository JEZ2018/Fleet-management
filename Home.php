<!DOCTYPE html>
<?php
session_start(); ?>
<?php
include("Header.php");
include("Check.php");
?>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Welcome to SUN Technologies Fleet Management System</h3></div>
<div class="container-fluid bg-2 text-center">
<h4 class="margin">Please select the option you want to choose</h4></div>
<br>
<br>
<div class="container-fluid">
				
				<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-2">
				
				<div class="container">
<div class="row justify-content-center">
 <div class="span8"> <a href="TripData.php" class="col-lg-2 btn btn-primary" role="button"> TRIP DATA</a></div></div></div>
 <br>
 <br>
<div class="container">
<div class="row justify-content-center">
  <div>  <a href="Report.php" class="col-md-2 btn btn-primary" role="button">REPORTS</a></div></div>
  <br>
 <br>
</div>
<div class="container">
<div class="row justify-content-center">
  <div > <a href="AddAdmin.php" class="col-lg-2 btn btn-primary" role="button">ADD ADMINS</a></div></div>
  <br>
 <br>
</div>
				
				</div>
				<div class="col-md-2">
				<div class="container">
<div class="row justify-content-center">
 <div> <a href="Driver.php" class="col-lg-2 btn btn-primary" role="button">DRIVER MASTER</a></div></div></div>
 <br>
 <br>
<div class="container">
<div class="row justify-content-center">
  <div><a href="Employee.php" class="col-lg-2 btn btn-primary" role="button">EMPLOYEE MASTER</a></div></div></div>
  <br>
 <br>
  <div class="container">
<div class="row justify-content-center">
 <div> <a href="Fare.php" class="col-lg-2 btn btn-primary" role="button">FARE MASTER</a></div></div>
 <br>
 <br>
  <br>
  </div>
  
				</div>
				<div class="col-md-4">
				
				<fieldset>
				<br>
		
	</fieldset>
	</div>
	</div>
	</div>
</body>
<Footer id="myFooter">
<div class="Footer-copyright">
            <p>© SUN Technologies </p>
        </div>
    </Footer>
</html>
