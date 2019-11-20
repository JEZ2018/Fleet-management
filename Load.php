<?php

if( isset( $_POST['Location'] ) )
{

$name = $_POST['Location'];
require_once 'Config.php';

$selectdata = " SELECT Fares FROM fare WHERE PlaceName ='$name'";
$res=mysqli_query($con,$selectdata);


while ($row =$res->fetch_assoc())
{
 echo "".$row['Fares']."";
 
}

}

?>