<?php

session_start();
require_once 'Config.php';
 $_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;
	$expiry='';
  if(isset($_POST['submit']))
{
	$sno =$_POST['SNO'];
	$date=$_POST['Date'];
	$sdate=$_POST['StartDate'];
	$drid=$_POST['DriverID'];
	$name =$_POST['Name'];
	$niname =$_POST['NickName'];
	$mobile=$_POST['MobileNo'];
	$amob=$_POST['AlternateNo'];
	$vno=$_POST['VehicleReg'];
	$carmanuf=$_POST['CarManuf'];
	$carmodel=$_POST['CarModel'];
	$road=$_POST['RoadTax'];
	$permit=$_POST['Permit'];
	$vendor=$_POST['InsuranceVendor'];
	$expiry=$_POST['Expiry'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$uploaddate=$date;
	$sql_Check= "SELECT DriverID FROM driver WHERE DriverID='$drid'";
	$result=mysqli_query($con,$sql_Check);
	if(mysqli_num_rows($result))
	{
echo "The Values match db";
$_SESSION['message']="The DriverID  already exists in database  ";
		$_SESSION['msg_type']="danger"; 
		Header("location:AddDriver.php");

}
else
{
	echo "success";
	$sqls="insert  into driver values('$sno','$date','$sdate','$drid','$name','$niname','$mobile','$amob','$vno','$carmanuf','$carmodel','$road','$permit','$vendor','$expiry','$status',NULL,NULL,'$x','$uploaddate')";
	mysqli_query($con,$sqls);
	$_SESSION['message']="Details have been sent";
		$_SESSION['msg_type']="success"; 
		Header("location: AddDriver.php");
}
}
 ?>