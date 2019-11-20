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
	$empid=$_POST['EmpID'];
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
	$uploaddate=$date;
	$sql_Check= "SELECT EmpID FROM employee WHERE EmpID='$empid'";
	$result=mysqli_query($con,$sql_Check);
	if(mysqli_num_rows($result))
	{
echo "The Values match db";
$_SESSION['message']="The Employee ID '$empid' already exists in database  ";
		$_SESSION['msg_type']="danger"; 
		Header("location:AddEmp.php");

}
else
{
	echo "success";
	$sql=" insert into employee values ('$sno','$date','$name','$empid','$gender','$doj','$mobile','$amob','$designation','$location','$email','$pemail','$department','$status','$address',NULL,NULL,'$x','$uploaddate')";
	mysqli_query($con,$sql);
	$_SESSION['message']="Details have been sent";
		$_SESSION['msg_type']="success"; 
		Header("location: AddEmp.php");
}
}
 ?>