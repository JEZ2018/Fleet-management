<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<?php require_once 'EditPlaceval.php' ?>
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
				<form class="form-horizontal" method="post" action="EditPlaceval.php">
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
      <label class="control-label col-md-3" for="PlaceName">PLACE NAME</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="PlaceName" placeholder="Place Name" name="PlaceName" value="<?php echo $pname; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Pincode">PINCODE</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Pincode" placeholder="Pincode" name="Pincode" value="<?php echo $pincode; ?>">
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
        <input type="text" class="form-control input-md" id="Date" readonly="readonly" placeholder="Date" name="Date"value="<?php echo $date; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Fare">FARE(Rs)</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Fare" placeholder="Fare" name="Fare" value="<?php echo $fare; ?>">
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
