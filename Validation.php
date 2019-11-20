
<?php
session_start();

require_once 'Config.php';
$login="";
$psd="";

 if(isset($_POST['logins']))
 {
	 $login = $_POST['username'];
	  $_SESSION['username']=$login;
 $psd = $_POST['psd'];
 $s    = "select * from addadmin where username ='$login' && Password='$psd'";
 $result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

 if($num==1)
 {
	Header('location:Home.php');
 }
elseif($num1==1)
 {echo "Succesful ";
	$_SESSION['message']="DATA ENTRY RIGHTS ON ";
		$_SESSION['msg_type']="success";

	 Header('location:dataentry.php');
 }
elseif($num2==1)
 {echo "Succesful ";
	$_SESSION['message']="MASTER ENTRY RIGHTS ON ";
		$_SESSION['msg_type']="success";

	 Header('location:masterentry.php');
 } 
else{
	echo "Error ";
	$_SESSION['message']="Invalid Login or Password";
		$_SESSION['msg_type']="danger"; 
		Header("location: index.php");

}
 }
 ?>