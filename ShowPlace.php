<!DOCTYPE html>
<?php
session_start();
?> 
<html lang="en">
<head>
  <title>Show Area</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'ShowPlace.php' ?>
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
 					<form role="form" method="post" action="ShowPlace1.php">
						<fieldset>
						<label>ENTER THE AREA NAME </label>
						<div class="form-group">
								<input type="text" name="area" id="area" class="form-control input-md" placeholder="AREA NAME">
						</div>
							<input type="submit" name="Search" class="btn btn-info" value="SEARCH">
						</fieldset>
					</form>
</div>
<div class="col-md-4">
				</div>
				<div class="col-md-4">
				
				</div>



</div>
</div>
<br>
<br>
<?php 
			require_once 'Config.php';
			$result=$mysqli->query("SELECT * FROM fare") or die($mysqli->error);
				?>
				<div class="container-fluid">
				<div class="row justify-content-center">
				<table class="table table-bordered table-hover">
				<thead class="thead-light">
				<tr>	
		<th>SNO</th>
		<th>DATE</th>
		<th>PLACENAME</th>
		<th>FARE</th>
        <th>PINCODE</th>
		<th>STATUS</th>
		<th>LAST MODIFIED BY</th>
		<th>LAST MODIFIED DATE</th>
		<th>UPLOAD BY</th>
		<th>UPLOAD DATE</th>
		<th colspan='2' >ACTION</th>
		</tr>
				</thead>
				<?php
				while ($row =$result->fetch_assoc()): ?>
				<tr>
				<td><?php echo $row['SNO']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['PlaceName']; ?></td>
				<td><?php echo $row['Fares']; ?></td>
				<td><?php echo $row['Pincode']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['LastModify']; ?></td>
				<td><?php echo $row['LastModifyDate']; ?></td>
				<td><?php echo $row['UploadBy']; ?></td>
				<td><?php echo $row['UploadDate']; ?></td>
				<td>
				<a href="EditPlace.php?edit=<?php echo $row['SNO']; ?> "
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
