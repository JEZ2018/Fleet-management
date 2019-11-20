<?php
require_once 'Config.php';
$name = $_POST['ename'];


$selectdata = " SELECT Name from employee where EmpID='$name'";
$res=mysqli_query($con,$selectdata);


while ($row =$res->fetch_assoc())
{
 echo "".$row['Name']."";
 
}



?>