<?php
session_start();
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
	$result=$mysqli->query("SELECT * FROM tripdata") or die($mysqli->error);
	$sno="";
	$date="";
	$tdate="";
	$empid="";
	$name="";
	$drpid="";
	$details=""; 
	$location="";
	$extrapay="";
	$b2b="";
	$fixed="";
	$total="";
	$time="";
	if(isset($_POST['Delete']))
	{
		$sno=$_POST['SNO'];
		$mysqli->query("DELETE FROM tripdata where SNO='$sno'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: EditTrip.php");
	}
	
	if(isset($_GET['edit']))
	{
		$sno=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM tripdata where SNO='$sno'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
	$sno =$row['SNO'];;
	$date=$row['Date'];
	$tdate=$row['TripDate'];
	$log=$row['Log'];
	$time=$row['Time'];
	$drid=$row['DriverID'];
	$empid =$row['EmpID'];
	$name=$row['Name'];
	$details =$row['Details'];
	$location=$row['Location'];
	$extrapay=$row['ExtraPay'];
	$b2b=$row['B2B'];
	$fixed=$row['FixedFare'];
	$total=$row['Total'];
	   }
		
	}
	
	
	
	
	
	
  if(isset($_POST['Modify']))
{
$modifydate=$mysqli->query("SELECT CURDATE() as Cdate") or die($mysqli->error);
if(count($modifydate)==1)
		{	
			$row=$modifydate->fetch_array();
			$cs=$row['Cdate'];
		
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
	$modify=$x;
	$modifyDate=$date;
	
	$mysqli->query("update tripdata set SNO='$sno',Date='$date',TripDate='$tdate',Log='$log',Time='$time',EmpID='$empid',Name='$name',DriverID='$drid',Details='$details',Location='$location',ExtraPay='$extrapay'
	,B2B='$b2b',FixedFare='$fixed',Total='$total',LastModify='$modify',LastModifyDate='$cs' where SNO='$sno'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: EditTrip.php");
}
}
 ?>