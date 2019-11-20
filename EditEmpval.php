<?php
session_start();
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
require_once 'Config.php';
	 $_SESSION['username']; 
		$x=$_SESSION['username'];
		$x;
	$result=$mysqli->query("SELECT * FROM employee") or die($mysqli->error);
	$sno="";
	$date="";
	$empid="";
	$name="";
	$gender="";
	$doj="";
	$mobile="";
	$amob="";
	$designation="";
	$location="";
	$email="";
	$pemail="";
	$department="";
	$status="";
	$address="";
	if(isset($_POST['Delete']))
	{
		$empid2=$_POST['EmpID'];
		$mysqli->query("DELETE FROM employee where EmpID='$empid2'") or die($mysqli->error());
		$_SESSION['message']="Record has been deleted";
		$_SESSION['msg_type']="danger"; 
		Header("location: EditEmp.php");
	}
	
	if(isset($_GET['edit']))
	{
		$empid=$_GET['edit'];
		$results=$mysqli->query("SELECT * FROM employee where EmpID='$empid'") or die($mysqli->error());
		if(count($results)==1)
		{	
			$row=$results->fetch_array();
			$sno =$row['SNO'];;
	$date=$row['Date'];
	$empid=$row['EmpID'];
	$name =$row['Name'];
	$gender=$row['Gender'];
	$doj=$row['Doj'];
	$mobile=$row['MobileNo'];;
	$amob=$row['AlternateNo'];
	$designation=$row['Designation'];
	$location=$row['Location'];
	$email=$row['Email'];
	$pemail=$row['Pemail'];
	$department=$row['Department'];
		$status=$row['Status'];
	$address=$row['Address'];
		}
		
	}
	
	
	
	
	
	
  if(isset($_POST['Modify']))
{
$modifydate=$mysqli->query("SELECT CURDATE() as Cdate") or die($mysqli->error);
if(count($modifydate)==1)
		{	
			$row=$modifydate->fetch_array();
			$cs=$row['Cdate'];
		
	$sno1 =$_POST['SNO'];
	$date=$_POST['Date'];
	$empid1=$_POST['EmpID'];
	$name =$_POST['Name'];
	if(isset($_POST['Gender']))
	{
		$gender=$_POST['Gender'];
	}
	$doj=$_POST['Doj'];
	$mobile=$_POST['MobileNo'];
	$amob=$_POST['AlternateNo'];
	$designation=$_POST['Designation'];
	$location=$_POST['Location'];
	$email=$_POST['Email'];
	$pemail=$_POST['PEmail'];
	$department=$_POST['Department'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$address=$_POST['Address'];
	$modify=$x;
	
	$mysqli->query("update employee set SNO='$sno1',Date='$date',EmpID='$empid1',Name='$name',Gender='$gender',Doj='$doj',MobileNo='$mobile',AlternateNo='$amob',
	Designation='$designation',Location='$location',Email='$email',PEmail='$pemail',Department='$department',Status='$status',Address='$address',
	LastModify='$modify',LastModifyDate='$cs' where EmpID='$empid1'");
	
	$_SESSION['message']="Record has been updated";
	echo $name;
		$_SESSION['msg_type']="success"; 
		Header("location: EditEmp.php");
}
}
 ?>