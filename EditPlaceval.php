<?php
session_start();
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
	$result=$mysqli->query("SELECT * FROM fare") or die($mysqli->error);
	$sno="";
	$date="";
	$pname="";
	$fare="";
	$pincode="";
	$status="";
	if(isset($_POST['Delete']))
	{
		$sno=$_POST['SNO'];
		$mysqli->query("DELETE FROM fare where SNO='$sno'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: EditPlace.php");
	}
	
	if(isset($_GET['edit']))
	{
		$sno=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM fare where SNO='$sno'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
	$sno =$row['SNO'];;
	$date=$row['Date'];
	$pname=$row['PlaceName'];
	$fare=$row['Fares'];
	$pincode=$row['Pincode'];
	$status=$row['Status'];
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
	$pname =$_POST['PlaceName'];
	$pincode=$_POST['Pincode'];
	$date=$_POST['Date'];
	$fare=$_POST['Fare'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$modify=$x;
	$modifyDate=$date;
	$mysqli->query("update fare set SNO='$sno',Date='$date',PlaceName='$pname',Pincode='$pincode',Fares='$fare',Status='$status',LastModify='$modify',LastModifyDate='$cs' where SNO='$sno'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: EditPlace.php");
}
}
 ?>