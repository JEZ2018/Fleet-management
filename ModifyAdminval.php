<?php
session_start();
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
	$result=$mysqli->query("SELECT * FROM addadmin") or die($mysqli->error);
	$sno="";
	$date="";
	$username="";
	$name="";
	$password="";
	$role="";
	$email="";
	$status="";
	$username=$_GET['edit'];
	if(isset($_POST['Delete']))
	{
		$sno=$_POST['SNO'];
		$mysqli->query("DELETE FROM addadmin where SNO='$sno'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: ModifyAdmin.php");
	}
	
	if(isset($_GET['edit']))
	{
		$username=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM addadmin where Username='$username'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
	$sno =$row['SNO'];
	$date=$row['Date'];
	$username=$row['Username'];
	$password =$row['Password'];
	$name=$row['Name'];
	$email=$row['Email'];
	$role=$row['Role'];
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
	$username=$_POST['Username'];
	$password =$_POST['Password'];
	$name=$_POST['Name'];
	$email=$_POST['Email'];;
	$role=$_POST['Role'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$modify=$x;
	$modifyDate=$date;
	$mysqli->query("update addadmin set SNO='$sno',Date='$date',Username='$username',Password='$password',Name='$name',Email='$email',Role='$role',Status='$status',
	LastModify='$modify',LastModifyDate='$cs' where SNO='$sno'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: ModifyAdmin.php");
}
}
 ?>