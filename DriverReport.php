<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Driver Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'DriverReport.php' ?>
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

<div class="container">
<form role="form" method="post" action="DriverReport.php">
			<div class="container-fluid bg-2 text-center">
	<h4 class="margin"><b>DRIVER REPORTS</b></h4></div>
			<br>
			<div class="row">
			
				<div class="col-md-3">
 					
						<fieldset>
						<div class="form-group">
							<label>ENTER THE DRIVER ID</label>
								<input type="text" id="DriverID" name="DriverID" class="form-control input-md" placeholder="DRIVER ID">
								
								</div>

								
							
								
															</fieldset>
					
				</div>
				<div class="col-md-3">
				<div class="form-group">
							<label>FROM DATE</label>
								<input type="date" id="sdate" name="sdate" class="form-control input-md" required>
								</div>
				</div>
				<div class="col-md-3">
				<div class="form-group">
							<label>TO DATE</label>
								<input type="date" id="edate" name="edate" class="form-control input-md" required>
							
								</div>
				</div>
				<div class="col-md-3">
				<div>
				<br>
				<input type="submit" name="submit" class="btn btn-info" value="SUBMIT"	>
				</div>
				
				</div>
				</div>
			</form>
			</div>

				
							<?php
require_once 'Config.php';
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['submit']))
{
	$sdate= $_POST['sdate'];
$edate=$_POST['edate'];
$drid=$_POST['DriverID'];

$result = mysqli_query($con,"SELECT d.DriverID,t.DriverID,d.Name,t.Total,t.TripDate,t.SNO  from tripdata t,driver d where TripDate between '$sdate' and '$edate' and t.DriverID='$drid' and t.DriverID=d.DriverID




");
$result1 = mysqli_query($con,"SELECT d.DriverID,t.DriverID,d.Name,t.Total,t.TripDate from tripdata t,driver d where TripDate between '$sdate' and '$edate' and t.DriverID='$drid' and t.DriverID=d.DriverID




");
$row2=mysqli_fetch_array($result1);
$na=$row2[2];
echo "<br>";
echo " <div class='container'>
	<b>REPORT OF  $drid - $na   FROM   </b> $sdate <b>TO  </b> $edate </div>
	
";
echo "<div class='container'>
<table class='table table-bordered table-hover'>
<thead  class='thead-dark'>
 <tr>	
		<th >SNO</th>
		<th >TRIP DATE </th>
		<th colspan ='2'>TOTAL</th>
      </tr>
    </thead>";
If($result)
{
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td >" . $row['SNO'] . "</td>";

echo "<td>" . $row['TripDate'] . "</td>";
echo "<td>" . $row['Total'] . "</td>";

echo "</tr>";
}}
echo "</table>
<div/>";
$sql=mysqli_query($con," SELECT SUM(Total) from tripdata where TripDate between '$sdate' and '$edate' and DriverID='$drid' ");
$row=mysqli_fetch_array($sql);
$total=$row[0];

echo "<label><b>The Total is =  </b> </label> \t";echo"<label><p> &#x20b9 </p></label>";echo"";echo $total;

echo "";
mysqli_close($con);
echo "  <div clas='conatiner'>
<div class='row'>
			
				<div class='col-md-4'>
 					<div class='form-group'>
								<input type='button' class='btn btn-md' onClick='myFunction()' value='PRINT'>
								<br>
								<br>
								</div>
								</div>
								<div class='col-md-4'>
 					
								<input type='button' class='btn btn-md' onClick='#' value='EXPORT DATA'>
								<br>
								<br>
								</div>
								<div class='col-md-2'>
								</div>
								</div>
								</div>";
}
?>
<br>
 	
				<script>
function myFunction() {
  window.print();
}
</script>	
				
	
			
</body>
<?php
include("Footer.php");
?>
</html>
