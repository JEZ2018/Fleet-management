<?php

session_start();
require_once 'Config.php';
$_SESSION['username']; 
	$x=$_SESSION['username'];
	$x;

  if(isset($_POST['submit']))
{$sno =$_POST['SNO'];
	$pname=$_POST['PlaceName'];
	$pincode=$_POST['Pincode'];
	$date=$_POST['Date'];
	$fare=$_POST['Fare'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$uploaddate=$date;
	$sql_Check= "SELECT PlaceName FROM fare WHERE PlaceName='$pname'";
	$result=mysqli_query($con,$sql_Check);
	if(mysqli_num_rows($result))
	{
echo "The Values match db";
$_SESSION['message']="The PlaceName already exists in database  ";
		$_SESSION['msg_type']="danger"; 
		Header("location:AddPlace.php");

}
else
{
	echo "success";
	$sql=" insert into fare values ('$sno','$date','$pname','$fare','$pincode','$status',NULL,NULL,'$x','$uploaddate')";
	mysqli_query($con,$sql);
	$_SESSION['message']="Details have been sent";
		$_SESSION['msg_type']="success"; 
		Header("location: AddPlace.php");
}
}
 ?>