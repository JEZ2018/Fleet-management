<?php
session_start();
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
	$result=$mysqli->query("SELECT * FROM driver") or die($mysqli->error);
	$sno="";
	$date="";
	$sdate="";
	$drpid="";
	$name="";
	$niname="";
	$mobile="";
	$amob="";
	$vno="";
	$carmanu="";
	$carmodel="";
	$road="";
	$permit="";
	$ins="";
	$insex="";
	$status="";
	if(isset($_POST['Delete']))
	{
		$drid2=$_POST['DriverID'];
		$mysqli->query("DELETE FROM driver where DriverID='$drid2'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: EditDriver.php");
	}
	
	if(isset($_GET['edit']))
	{
		$drid=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM driver where DriverID='$drid'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
	$sno =$row['SNO'];
	$date=$row['Date'];
	$sdate=$row['StartDate'];
	$drid=$row['DriverID'];
	$name =$row['Name'];
	$niname =$row['Nickname'];
	$mobile=$row['MobileNo'];;
	$amob=$row['AlternateNo'];
	$vno=$row['VehicleNo'];
	$carmanu=$row['CarManu'];
	$carmodel=$row['CarModel'];
	$road=$row['RoadTax'];
	$permit=$row['Permit'];
	$ins=$row['InsuranceVendor'];
	$insex=$row['InsuranceEx'];
		$status=$row['Status'];
	
		}
		
	}
	
	
	
	
	
	
  if(isset($_POST['Modify']))
{$modifydate=$mysqli->query("SELECT CURDATE() as Cdate") or die($mysqli->error);
if(count($modifydate)==1)
		{	
			$row=$modifydate->fetch_array();
			$cs=$row['Cdate'];
		

	$sno =$_POST['SNO'];
	$date=$_POST['Date'];
	$sdate=$_POST['StartDate'];
	$drid=$_POST['DriverID'];
	$name =$_POST['Name'];
	$niname =$_POST['NickName'];
	$mobile=$_POST['MobileNo'];
	$amob=$_POST['AlternateNo'];
	$vno=$_POST['VehicleReg'];
	$carmanu=$_POST['CarManuf'];
	$carmodel=$_POST['CarModel'];
	$road=$_POST['RoadTax'];
	$permit=$_POST['Permit'];
	$ins=$_POST['InsuranceVendor'];
	$insex=$_POST['Expiry'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$modify=$x;

	$mysqli->query("update driver set SNO='$sno',Date='$date',StartDate='$sdate',DriverID='$drid',Name='$name',Nickname='$niname',MobileNo='$mobile',AlternateNo='$amob',VehicleNo='$vno',CarManu='$carmanu',CarModel='$carmodel',RoadTax='$road',Permit='$permit',InsuranceVendor='$ins',InsuranceEx='$insex',Status='$status',LastModify='$modify',LastModifyDate='$cs' where DriverID='$drid'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: EditDriver.php");
}
}
 ?>