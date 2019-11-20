<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modify ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'ModifyAdminval.php' ?>
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
				<form class="form-horizontal" method="post" action="ModifyAdminval.php">
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
      <label class="control-label col-md-3" for="Username">USERNAME</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Username" placeholder="Username" name="Username" value="<?php echo $username; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Name">NAME</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="Name" name="Name" value="<?php echo $name; ?>">
      </div>
    </div>
	
	<div class="form-group row">
      <label class="control-label col-md-3" for="Role">ROLE</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Role" id="Role">
  <option><?php echo $role; ?></option>
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
        <input type="text" class="form-control input-md" id="Date" readonly="readonly" placeholder="Date" name="Date" value="<?php echo $date; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Password">PASSWORD</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Password" placeholder="Password" name="Password" value="<?php echo $password; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Email">EMAIL ID</label>
      <div class="col-md-3">          
        <input type="email" class="form-control input-md" id="Email" placeholder="Email" name="Email" value="<?php echo $email; ?>">
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
