<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<style>
.required {
  color: red;
}
</style>
<?php require_once 'AddPlaceval.php' ?>
				<?php
				if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
				</div>
				<?php endif; ?>
<?php
include("Check.php");
include("Header.php");

?>

<style>
</style>

<div class="container-fluid">
				
				<div class="row">
				<form class="form-horizontal" method="post" action="AddPlaceval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM fare";
$re=mysqli_query($con,$selectdata);
$row=$re->fetch_array();
			$cs=$row['SNO'];
echo $cs;
if($cs=="")
{
	echo "1";

}
else{
while ($row =$re->fetch_assoc())
{
 echo "".$row['SNO']."";

}
}
?> ">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="PlaceName">PLACE NAME <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="PlaceName" placeholder="Place Name" name="PlaceName"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Pincode">PINCODE</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Pincode" placeholder="Pincode" name="Pincode" >
      </div>
    </div>
  </fieldset>
</div>


				</div>
			
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">DATE</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="Date" placeholder="Date" name="Date">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Fare">FARE(Rs) <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Fare" placeholder="Fare"  name="Fare"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Status">STATUS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Status" id="Status">
    <option>ACTIVE</option>
    <option>INACTIVE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
	<label class="control-label col-md-3" for="submit"></label>
      <div class="col-md-3"> 
   <input type="submit" name="submit" id="submit"class="btn btn-info" value="SUBMIT">
   </div>
   </div>
  </fieldset>
</div>
<div class="col-md-2">
			</div>

				</div>
				</form>
				</div>
					<script>
var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');

document.getElementById("Date").value = utc;
</script>	
</div>			
</body>
</html>
