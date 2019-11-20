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
	$username=$_POST['Username'];
	$password =$_POST['Password'];
	$name=$_POST['Name'];
	$email=$_POST['Email'];;
	$role=$_POST['Role'];
	if(isset($_POST['Status']))
	{
		$status=$_POST['Status'];
	}
	$uploaddate=$date;
	$sql_Check= "SELECT Username FROM addadmin WHERE Username='$username'";
	$result=mysqli_query($con,$sql_Check);
	if(mysqli_num_rows($result))
	{
echo "The Values match db";
$_SESSION['message']="The Username '$username' already exists in database  ";
		$_SESSION['msg_type']="danger"; 
		Header("location:NewAdmin.php");

}
else
{
	echo "success";
	$sql=" insert into addadmin values ('$sno','$date','$username','$password','$name','$email','$role','$status',NULL,NULL,'$x','$uploaddate')";
	mysqli_query($con,$sql);
	$_SESSION['message']="Details have been sent";
		$_SESSION['msg_type']="success"; 
		Header("location: NewAdmin.php");
}
}
 ?>