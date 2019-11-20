<!DOCTYPE html>
<html lang="en">
<head>
  <title>New ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'NewAdminval.php' ?>
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
.required {
  color: red;
}
</style>
<div class="container-fluid">
				
				<div class="row">
				<form class="form-horizontal" method="post" action="NewAdminval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM addadmin";
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
      <label class="control-label col-md-3" for="Username">USERNAME <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Username" placeholder="Username" name="Username"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Name">NAME <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name">
      </div>
    </div>
	
	<div class="form-group row">
      <label class="control-label col-md-3" for="Role">ROLE</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Role" id="Role">
    <option>SUPER ADMIN</option>
    <option>ADMIN</option>
	<option>DATA ENTRY</option>
  </select>
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
        <input type="text" class="form-control input-md" id="Date" placeholder="Date" name="Date" readonly="readonly">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Password">PASSWORD <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Password" placeholder="Password" name="Password"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Email">EMAIL ID</label>
      <div class="col-md-3">          
        <input type="email" class="form-control input-md" id="Email" placeholder="Email" name="Email"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Status">STATUS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Status" id="Status">
    <option>Active</option>
    <option>Inactive</option>
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
