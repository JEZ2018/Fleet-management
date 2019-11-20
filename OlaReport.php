<!DOCTYPE html>
<?php 
session_start()
?>
<html lang="en">
<head>
  <title>Ola Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'OlaReport.php' ?>
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
<form role="form" method="post" action="OlaReport.php">
			<div class="container-fluid bg-2 text-center">
	<h4 class="margin"><b>OLA REPORTS</b></h4></div>
			<br>
			<div class="row">
			
				<div class="col-md-4">
 					
						<fieldset>
<div class="form-group">
							<label>FROM DATE</label>
								<input type="date" id="sdate" name="sdate" class="form-control input-md" required>
								
								</div>
					
			
															</fieldset>
					
				</div>
				<div class="col-md-4">
				<div class="form-group">
							<label>TO DATE</label>
								<input type="date" id="edate" name="edate" class="form-control input-md" required>
							
								</div>
				</div>
				<div class="col-md-4">
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
$result = mysqli_query($con,"select TripDate as Date,SUM(TotalPayable) as Total
		from tripdataola
		where TripDate BETWEEN '$sdate' and '$edate'
		group by TripDate

");
echo "<br>";
echo " <div class='container'>
	<b>START DATE =</b> $sdate </div>
	<div class='container'>
	<b>END DATE =</b> $edate </div>
";

echo "<div class='container'>
<table class='table table-bordered table-hover'>
<thead class='thead-dark'>
 <tr>	
		<th>DATE</th>
		<th>TOTAL</th>
      </tr>
    </thead>";
If($result)
{
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Total'] . "</td>";

echo "</tr>";
}}
echo "</table>
<div/>";
$sql=mysqli_query($con," SELECT SUM(TotalPayable) from tripdataola where TripDate BETWEEN '$sdate' AND '$edate'");
$row=mysqli_fetch_array($sql);
$total=$row[0];

echo "<label><b>The Total is =  </b> </label> \t";echo"<label><p> &#x20b9 </p></label>";echo"";echo $total;
}
echo "  <div clas='conatiner'>
<div class='row'>
			
				<div class='col-md-4'>
 					
								<input type='button' class='btn btn-md' onClick='myFunction()' value='PRINT'>
								<br>
								<br>
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
mysqli_close($con);
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
