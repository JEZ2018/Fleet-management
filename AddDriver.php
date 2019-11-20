<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Driver</title>
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
<?php require_once 'AddDriverval.php' ?>
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
				<form class="form-horizontal" method="post" action="AddDriverval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM driver";
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
      <label class="control-label col-md-3" for="StartDate">START DATE</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="StartDate" placeholder="StartDate" name="StartDate">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="Name">NAME <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="MobileNo">MOBILE NO <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="MobileNo" placeholder="MobileNo" name="MobileNo" required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="VehicleReg">VEHICLE REG NO <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="VehicleReg" placeholder="Vehicle Reg" name="VehicleReg" required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="CarModel">CAR MODEL</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="CarModel" placeholder="Car Model" name="CarModel">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="RoadTax">ROAD TAX</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="RoadTax" placeholder="RoadTax" name="RoadTax">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Expiry">INSURANCE EXPIRY ON</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="Expiry" placeholder="Expiry" name="Expiry">
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
        <input type="text" class="form-control input-md" id="Date" placeholder="Date" readonly="readonly" name="Date">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">DRIVER ID <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="DriverID" placeholder="DriverID" name="DriverID"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="NickName">NICKNAME </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="NickName" placeholder="NickName" name="NickName">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="AlternateNo">ALTERNATE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="AlternateNo" placeholder="Alternate No" name="AlternateNo">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="CarManuf">CAR MANUFACTURER</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="CarManuf" placeholder="Car Manufacturer" name="CarManuf">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="InsuranceVendor">INSURANCE VENDOR</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="InsuranceVendor" placeholder="Insurance Vendor" name="InsuranceVendor">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Permit">PERMIT</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Permit" placeholder="Permit" name="Permit">
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
