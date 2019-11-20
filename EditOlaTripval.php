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
	$log="";
	$empid="";
	$ola="";
	$details=""; 
	$location="";
	$froms="";
	$tos="";
	$totalpayable="";
	$paidby="";
	
	if(isset($_POST['Delete']))
	{
		$sno=$_POST['SNO'];
		$mysqli->query("DELETE FROM tripdataola where SNO='$sno'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: EditOlaTrip.php");
	}
	
	if(isset($_GET['edit']))
	{
		$sno=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM tripdataola where SNO='$sno'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
	$sno =$row['SNO'];
	$date=$row['Date'];
	$tdate=$row['TripDate'];
	$log=$row['Log'];
	$ola=$row['Ola'];
	$empid =$row['EmpID'];
	$details =$row['Details'];
	$location=$row['Location'];
	$froms=$row['Froms'];
	$tos=$row['Tos'];
	$totalpayable=$row['TotalPayable'];
	$paidby=$row['PaidBy'];
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
	$empid=$_POST['EmpID'];
	$ola=$_POST['Ola'];
	$details =$_POST['Details'];
	$location=$_POST['Location'];
	$froms=$_POST['Froms'];
	$tos=$_POST['Tos'];
	$totalpayable=$_POST['TotalPayable'];
	$paidby=$_POST['PaidBy'];
	$modify=$x;
	$mysqli->query("update tripdataola set SNO='$sno',Date='$date',TripDate='$tdate',Log='$log',EmpID='$empid',Ola='$ola',Details='$details',Location='$location',Froms='$froms'
	,Tos='$tos',TotalPayable='$totalpayable',PaidBy='$paidby',LastModify='$modify',LastModifyDate='$cs' where SNO='$sno'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: EditOlaTrip.php");
}
}
 ?>