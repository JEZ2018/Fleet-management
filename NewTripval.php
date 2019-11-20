<?php
session_start();
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
  if(isset($_POST['submit']))
{

	$sno =$_POST['SNO'];
	$date=$_POST['Date'];
	$tdate=$_POST['TripDate'];
	$log=$_POST['Log'];
	$time=$_POST['Time'];
	$empid=$_POST['EmpID'];
	$name=$_POST['Name'];
	$drid=$_POST['DriverID'];
	$details =$_POST['Details'];
	$location=$_POST['Location'];
	$extrapay=$_POST['ExtraPay'];
	$b2b=$_POST['B2B'];
	$fixed=$_POST['FixedFare'];
	$total=$_POST['Total'];
	$uploaddate=$date;
	$sql_Check = "SELECT DriverID FROM driver WHERE DriverID='$drid'";
	$sql_Check1= "SELECT EmpID FROM employee WHERE EmpID='$empid'";
$res=mysqli_query($con,$sql_Check);
$res1=mysqli_query($con,$sql_Check1);
if(mysqli_num_rows($res) && mysqli_num_rows($res1) )
{
echo "success";
$sql=" insert into tripdata values ('$sno','$date','$tdate','$log','$time','$empid','$name','$drid','$details','$location','$extrapay','$b2b','$fixed','$total',NULL,NULL,'$x','$uploaddate')";
	
	mysqli_query($con,$sql);
	$_SESSION['message']="The details have been sent successfully ";
		$_SESSION['msg_type']="success"; 
		Header("location: NewTrip.php");
}
else
{
echo "The Values dont match db";
$_SESSION['message']="Either the DriverID or Employee ID don't match the databse ";
		$_SESSION['msg_type']="danger"; 
		Header("location: NewTrip.php");
}
	
	
}
 ?>