<?php
require_once 'Config.php';
$name = $_POST['location'];


$selectdata = " SELECT Location,Name from employee where EmpID='$name'";
$res=mysqli_query($con,$selectdata);


while ($row =$res->fetch_assoc())
{
 echo "".$row['Location']."";
 
}



?>