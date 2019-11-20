<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee</title>
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
<?php require_once 'AddEmpval.php' ?>
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
include("Header.php");
include("Check.php");
?>
<?php
require_once 'Config.php';
$option="SELECT  PlaceName from fare";
$op=mysqli_query($con,$option);



?>
<style>
</style>
	
<div class="container-fluid">
				
				<div class="row">
				<form class="form-horizontal" method="post" action="AddEmpval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM employee";
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
      <label class="control-label col-md-3" for="Name">NAME <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Gender">GENDER <span class="required">*</span></label>
      <div class="col-md-3"> 
  <select class="form-control" name="Gender" id="Gender">
    <option>MALE</option>
    <option>FEMALE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="MobileNo">MOBILE NO <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="MobileNo" placeholder="MobileNo" name="MobileNo">
      </div>
    </div>
	
	<div class="form-group row">
      <label class="control-label col-md-3" for="Designation">DESIGNATION</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Designation" placeholder="Designation" name="Designation">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Email">EMAIL ID</label>
      <div class="col-md-3">          
        <input type="email" class="form-control input-md" id="Email" placeholder="Email" name="Email">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Department">DEPARTMENT</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Department" placeholder="Department" name="Department">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Address">ADDRESS</label>
      <div class="col-md-4">          
        <input type="text" class="form-control input-md" id="Address" placeholder="Address" name="Address">
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
        <input type="text" class="form-control input-md" id="Date" readonly="readonly" placeholder="Date" name="Date">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" placeholder="Emp ID" name="EmpID"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Doj">DOJ </label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="Doj" placeholder="Doj" name="Doj">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="AlternateNo">ALTERNATE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="AlternateNo" placeholder="Alternate No" name="AlternateNo">
      </div>
    </div>
    
	<div class="form-group row">
      <label class="control-label col-md-3" for="Location">LOCATION <span class="required">*</span></label>
      <div class="col-md-3"> 
  <select class="form-control" name="Location" id="Location" onchange="loaddata();">
  <?php while ($rows=$op->fetch_assoc())
  {
	  $opt=$rows['PlaceName'];
	  echo "<option value='$opt'>$opt</option> ";
  }
	  ?>
	  
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="PEmail">PERSONAL EMAIL ID</label>
      <div class="col-md-3">          
        <input type="email" class="form-control input-md" id="PEmail" placeholder="Personal Email" name="PEmail">
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
