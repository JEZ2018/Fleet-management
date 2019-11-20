<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'EditEmpval.php' ?>
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
<?php
require_once 'Config.php';
$option="SELECT  PlaceName from fare";
$op=mysqli_query($con,$option);



?>
<style>
</style>
<div class="container-fluid">
				
				<div class="row">
				<form class="form-horizontal" method="post" action="EditEmpval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="number" class="form-control input-md" id="SNO" readonly="readonly" placeholder="SNO" name="SNO" value="<?php echo $sno; ?>">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="Name">NAME</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name" value="<?php echo $name; ?>" >
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Gender">GENDER</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Gender" id="Gender" >
  <option><?php echo $gender; ?></option>
    <option>MALE</option>
    <option>FEMALE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="MobileNo">MOBILE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="MobileNo" placeholder="MobileNo" name="MobileNo"value="<?php echo $mobile; ?>">
      </div>
    </div>
	
	<div class="form-group row">
      <label class="control-label col-md-3" for="Designation">DESIGNATION</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Designation" placeholder="Designation" name="Designation" value="<?php echo $designation; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Email">EMAIL ID</label>
      <div class="col-md-3">          
        <input type="email" class="form-control input-md" id="Email" placeholder="Email" name="Email" value="<?php echo $email; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Department">DEPARTMENT</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Department" placeholder="Department" name="Department" value="<?php echo $department; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Address">ADDRESS</label>
      <div class="col-md-4">          
        <input type="text" class="form-control input-md" id="Address" placeholder="Address" name="Address" value="<?php echo $address; ?>">
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
        <input type="date" class="form-control input-md" id="Date" readonly="readonly" placeholder="Date" name="Date"value="<?php echo $date; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" placeholder="Emp ID" name="EmpID"required value="<?php echo $empid; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Doj">DOJ </label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="Doj" placeholder="Doj" name="Doj" value="<?php echo $doj; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="AlternateNo">ALTERNATE NO</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="AlternateNo" placeholder="Alternate No" name="AlternateNo" value="<?php echo $amob; ?>">
      </div>
    </div>
    
	<div class="form-group row">
      <label class="control-label col-md-3" for="Location">LOCATION </label>
      <div class="col-md-3"> 
  <select class="form-control" name="Location" id="Location" onchange="loaddata();">
  <option><?php echo $location; ?></option>
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
        <input type="email" class="form-control input-md" id="PEmail" placeholder="PEmail" name="PEmail" value="<?php echo $pemail; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Status">STATUS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Status" id="Status" >
  <option><?php echo $status; ?></option>
    <option>ACTIVE</option>
    <option>INACTIVE</option>
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
