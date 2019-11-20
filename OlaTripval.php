<?php
session_start();
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
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
	$total="";
	$paidby="";
	
  if(isset($_POST['submit']))
{

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

	$total=$_POST['TotalPayable'];
	$paidby=$_POST['PaidBy'];
	$uploaddate=$date;
	$sql_Check1= "SELECT EmpID FROM employee WHERE EmpID='$empid'";
$res1=mysqli_query($con,$sql_Check1);
if(mysqli_num_rows($res1) )
{
echo "success";
$sql=" insert into tripdataola values ('$sno','$date','$tdate','$log','$empid','$ola','$details','$location','$froms','$tos','$total','$paidby',NULL,NULL,'$x','$uploaddate')";
	
	mysqli_query($con,$sql);
	$_SESSION['message']="The details have been sent successfully ";
		$_SESSION['msg_type']="success"; 
		Header("location: OlaTrip.php");
}
else
{
echo "The Values dont match db";
$_SESSION['message']="The  Employee ID doesn't match the databse ";
		$_SESSION['msg_type']="danger"; 
		Header("location: OlaTrip.php");
}
	
	
}
 ?>