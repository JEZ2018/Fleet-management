<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Show Driver</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'ShowDriver1.php' ?>
				<?php
				if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
				</div>
				<?php endif; ?>
<?php
include("Check.php");
include("Header.php");

?>
<style>
</style>
<div class="container">
<div class="row">
<div class="col-md-4">
 					<form role="form" method="post" action="ShowDriver1.php">
						<fieldset>
						<label>ENTER THE DRIVER ID </label>
						<div class="form-group">
								<input type="text" name="DriverID" id="DriverID" class="form-control input-md" placeholder="DriverID">
						</div>
							<input type="submit" name="Search" class="btn btn-info" value="Search">
						</fieldset>
					</form>
</div>
<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<form role="form" method="post" action="ShowDriver1.php">
						<fieldset>
				<label>SEARCH THE SNO </label>
						<div class="form-group">
								<input type="text" name="SNO" id="SNO" class="form-control input-md" placeholder="SNO">
						</div>
							<input type="submit" name="SearchS" class="btn btn-info" value="Search">
							</fieldset>
					</form>
				</div>



</div>
</div>
<br>
<br>	
<?php 
require_once 'Config.php';
if(isset($_POST['Search']))
{$us=$_POST['DriverID'];
	$q="SELECT * from driver where DriverID='$us'";
	$final=mysqli_query($con,$q);
	
}
else if(isset($_POST['SearchS']))
{$us=$_POST['SNO'];
	$q="SELECT * from driver where SNO='$us'";
	$final=mysqli_query($con,$q);
	
}
			
				?>
				<div class="container-fluid">
				<div class="row justify-content-center">
				<table class="table table-bordered table-hover">
				<thead class="thead-light">
				<tr>	
		<th>SNO</th>
		<th>DATE</th>
		<th>START DATE</th>
		<th>DRIVER ID</th>
		<th>NAME</th>
		<th>NICK NAME</th>
		<th>MOBILE NO</th>
		<th>ALTERNATE NO</th>
		<th>VEHICLE REG NO</th>
		<th>CAR MANUFACTURER</th>
		<th>CAR MODEL</th>
		<th>ROAD TAX</th>
		<th>PERMIT</th>
		<th>STATUS</th>
		<th>LAST MODIFIED BY</th>
		<th>LAST MODIFIED DATE</th>
		<th>UPLOAD BY</th>
		<th>UPLOAD DATE</th>
		<th colspan='2' >ACTION</th>
		</tr>
				</thead>
				<?php
				while ($row =$final->fetch_assoc()): ?>
				<tr>
				<td><?php echo $row['SNO']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['StartDate']; ?></td>
				<td><?php echo $row['DriverID']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Nickname']; ?></td>
				<td><?php echo $row['MobileNo']; ?></td>
				<td><?php echo $row['AlternateNo']; ?></td>
				<td><?php echo $row['VehicleNo']; ?></td>
				<td><?php echo $row['CarManu']; ?></td>
				<td><?php echo $row['CarModel']; ?></td>
				<td><?php echo $row['RoadTax']; ?></td>
				<td><?php echo $row['Permit']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['LastModify']; ?></td>
				<td><?php echo $row['LastModifyDate']; ?></td>
				<td><?php echo $row['UploadBy']; ?></td>
				<td><?php echo $row['UploadDate']; ?></td>
				<td>
				<a href="EditDriver.php?edit=<?php echo $row['DriverID']; ?> "
					class="btn btn-info">Edit</a>
				</td>
				</tr>
				<?php endwhile; ?>
				</table>
				</div>

</body>
<?php
include("Footer.php");
?>
</html>
