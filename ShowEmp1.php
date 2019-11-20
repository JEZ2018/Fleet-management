<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Show Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'ShowEmp1.php' ?>
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
 					<form role="form" method="post" action="ShowEmp1.php">
						<fieldset>
						<label>ENTER THE EMPLOYEE ID </label>
						<div class="form-group">
								<input type="text" name="EmployeeID" id="EmployeeID" class="form-control input-md" placeholder="EmployeeID">
						</div>
							<input type="submit" name="Search" class="btn btn-info" value="SEARCH">
						</fieldset>
					</form>
</div>
<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<form role="form" method="post" action="ShowEmp1.php">
						<fieldset>
				<label>SEARCH THE SNO </label>
						<div class="form-group">
								<input type="text" name="SNO" id="SNO" class="form-control input-md" placeholder="SNO">
						</div>
							<input type="submit" name="SearchS" class="btn btn-info" value="SEARCH">
							<br>
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
{$us=$_POST['EmployeeID'];
	$q="SELECT * from employee where EmpID='$us'";
	$final=mysqli_query($con,$q);
	
}
else if(isset($_POST['SearchS']))
{$us=$_POST['SNO'];
	$q="SELECT * from employee where SNO='$us'";
	$final=mysqli_query($con,$q);
	
}	?>
				<br>
				<div class="container-fluid">
				<div class="row justify-content-center">
				<table class="table table-bordered table-hover table-responsive">
				<thead class="thead-light">
				<tr>	
		<th>SNO</th>
		<th>DATE</th>
		<th>NAME</th>
		<th>EMP ID</th>
        <th>GENDER</th>
        <th>DOJ</th>
		<th>MOBILE NO</th>
		<th>ALTERNATE NO</th>
		<th>DESIGNATION</th>
		<th>LOCATION</th>
		<th>EMAIL ID</th>
		<th>PERSONAL EMAIL ID</th>
		<th>DEPARTMENT</th>
		<th>ADDRESS</th>
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
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['EmpID']; ?></td>
				<td><?php echo $row['Gender']; ?></td>
				<td><?php echo $row['Doj']; ?></td>
				<td><?php echo $row['MobileNo']; ?></td>
				<td><?php echo $row['AlternateNo']; ?></td>
				<td><?php echo $row['Designation']; ?></td>
				<td><?php echo $row['Location']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Pemail']; ?></td>
				<td><?php echo $row['Department']; ?></td>
				<td><?php echo $row['Address']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['LastModify']; ?></td>
				<td><?php echo $row['LastModifyDate']; ?></td>
				<td><?php echo $row['UploadBy']; ?></td>
				<td><?php echo $row['UploadDate']; ?></td>
				<td>
				<a href="EditEmp.php?edit=<?php echo $row['EmpID']; ?> "
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
