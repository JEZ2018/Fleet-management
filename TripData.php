<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
  <title>TripData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("Header.php");
include("Check.php");
?>

<div class="container-fluid">
				
				<div class="row">
				<div class="col-md-4">
				</div>
				
				<div class="col-md-2">
				
				<div class="container">
<div class="row justify-content-center">
 <div class="span8"> <a href="NewTrip.php" class="col-lg-2 btn btn-primary" role="button">NEW TRIP</a></div></div></div>
 <br>
 <br>
<div class="container">
<div class="row justify-content-center">
  <div><a href="Ola.php" class="col-lg-2 btn btn-primary" role="button">OLA TRIP</a></div></div></div>
				
				</div>
				<div class="col-md-2">
				<div class="container">
<div class="row justify-content-center">
 <div> <a href="ShowTrip.php" class="col-lg-2 btn btn-primary" role="button">SHOW / EDIT TRIP DATA</a></div></div></div>
 <br>
 <br>

  <br>
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

</body>
</html>
