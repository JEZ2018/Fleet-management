<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Show Trip</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'ShowTrip1.php' ?>
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
 					<form role="form" method="post" action="ShowTrip1.php">
						<fieldset>
						<label>ENTER THE DRIVER ID </label>
						<div class="form-group">
								<input type="text" name="DriverID" id="DriverID" class="form-control input-md" placeholder="Driver ID">
						</div>
							<input type="submit" name="Search" class="btn btn-info" value="SEARCH">
						</fieldset>
					</form>
</div>
<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<form role="form" method="post" action="ShowTrip1.php">
						<fieldset>
				<label>SEARCH THE SNO </label>
						<div class="form-group">
								<input type="text" name="SNO" id="SNO" class="form-control input-md" placeholder="SNO">
						</div>
							<input type="submit" name="SearchS" class="btn btn-info" value="SEARCH">
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
	$q="SELECT * from tripdata where DriverID='$us'";
	$final=mysqli_query($con,$q);
	
}
else if(isset($_POST['SearchS']))
{$us=$_POST['SNO'];
	$q="SELECT * from tripdata where SNO='$us'";
	$final=mysqli_query($con,$q);
	
}
				?>
				<div class="container-fluid">
				<div class="row justify-content-center">
				<table class="table table-bordered">
				<thead>
				<tr>	
		<th>SNO</th>
		<th>DATE</th>
		<th>TRIP DATE</th>
		<th>LOGIN/LOGOUT TIME</th>
		<th>TIME IN/OUT</th>
		<th>EMP ID</th>
		<th>EMP NAME</th>
        <th>DRIVER ID</th>
        <th>DETAILS</th>
		<th>LOCATION</th>
		<th>EXTRA PAY</th>
		<th>B TO B</th>
		<th>FIXED FARE</th>
		<th>TOTAL COST</th>
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
				<td><?php echo $row['TripDate']; ?></td>
				<td><?php echo $row['Log']; ?></td>
				<td><?php echo $row['Time']; ?></td>
				<td><?php echo $row['EmpID']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['DriverID']; ?></td>
				<td><?php echo $row['Details']; ?></td>
				<td><?php echo $row['Location']; ?></td>
				<td><?php echo $row['ExtraPay']; ?></td>
				<td><?php echo $row['B2B']; ?></td>
				<td><?php echo $row['FixedFare']; ?></td>
				<td><?php echo $row['Total']; ?></td>
				<td><?php echo $row['LastModify']; ?></td>
				<td><?php echo $row['LastModifyDate']; ?></td>
				<td><?php echo $row['UploadBy']; ?></td>
				<td><?php echo $row['UploadDate']; ?></td>
				<td>
				<a href="EditTrip.php?edit=<?php echo $row['SNO']; ?> "
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
