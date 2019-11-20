<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Driver</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'EditDriverval.php' ?>
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
				<form class="form-horizontal" method="post" action="EditDriverval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="number" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value="<?php echo $sno; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="StartDate">START DATE</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="StartDate" placeholder="StartDate" name="StartDate" value="<?php echo $sdate; ?>">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="Name">NAME</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name"value="<?php echo $name; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="MobileNo">MOBILE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="MobileNo" placeholder="MobileNo" name="MobileNo" value="<?php echo $mobile; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="VehicleReg">VEHICLE REG NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="VehicleReg" placeholder="Vehicle Reg" name="VehicleReg" value="<?php echo $vno; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="CarModel">CAR MODEL</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="CarModel" placeholder="Car Model" name="CarModel" value="<?php echo $carmodel; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="RoadTax">ROAD TAX</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="RoadTax" placeholder="RoadTax" name="RoadTax" value="<?php echo $road; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Expiry">INSURANCE EXPIRY ON</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="Expiry" placeholder="Expiry" name="Expiry" value="<?php echo $insex; ?>">
      </div>
    </div>
  </fieldset>
</div>


				</div>
			
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="Date">DATE</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="Date" placeholder="Date" name="Date" value="<?php echo $date; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">DRIVERID</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="DriverID" placeholder="DriverID" name="DriverID" value="<?php echo $drid; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="NickName">NICKNAME </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="NickName" placeholder="NickName" name="NickName" value="<?php echo $niname; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="AlternateNo">ALTERNATE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="AlternateNo" placeholder="Alternate No" name="AlternateNo" value="<?php echo $amob; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="CarManuf">CAR MANUFACTURER</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="CarManuf" placeholder="Car Manufacturer" name="CarManuf" value="<?php echo $carmanu; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="InsuranceVendor">INSURANCE VENDOR</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="InsuranceVendor" placeholder="Insurance Vendor" name="InsuranceVendor" value="<?php echo $ins; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Permit">PERMIT</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Permit" placeholder="Permit" name="Permit" value="<?php echo $permit; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Status">STATUS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Status" id="Status" value="<?php echo $status; ?>">
    <option>Active</option>
    <option>Inactive</option>
  </select>
      </div>
    </div>
	
	<br>
	<br>
	<br>
	<br>
	<div class="form-group row">
	<div class="col-md-3"> 
   <input type="submit" name="Delete" id="Delete"class="btn btn-danger btn-md" value="DELETE ENTRY">
   </div>
      <div class="col-md-3"> 
   <input type="submit" name="Modify" id="Modify"class="btn btn-info" value="MODIFY ENTRY">
   </div>
   </div>
  </fieldset>
</div>
<div class="col-md-2">
			</div>

				</div>
				</form>
				</div>
</div>			
</body>
</html>
