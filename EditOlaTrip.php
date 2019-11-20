<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Ola TripData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
		<script type="text/javascript">
		
function loadlocation()
{
	 var name=document.getElementById( "EmpID" ).value;

 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'Loadl.php',
  data: {
   location:name,
  },
  success: function (response) {
;
   // We get the element having id of display_info and put the response inside it
   $('#Location').val(response).change();
  
  }
  });
 }
	
 else
 {
  $( '#Location' ).change();
 }
}
</script>

</head>
<body>
<?php require_once 'EditOlaTripval.php' ?>
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
				<form class="form-horizontal" method="post" action="EditOlaTripval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="number" class="form-control input-md" id="SNO" placeholder="SNO" name="SNO" readonly="readonly" value="<?php echo $sno; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="TripDate">TRIP DATE</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="TripDate" placeholder="Trip Date" name="TripDate" value="<?php echo $tdate; ?>">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" onkeyup="loadlocation();" placeholder="Emp ID" name="EmpID" value="<?php echo $empid; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Details">DETAILS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Details" id="Details">
    <option> <?php echo $details; ?></option>
    <option>PICKUP</option>
    <option>DROP</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Froms">FROM</label>
     <div class="col-md-3"> 
  <select class="form-control" name="Froms" id="Froms">
    <option> <?php echo $froms; ?></option>
    <option>HOME</option>
    <option>OFFICE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="TotalPayable">TOTAL PAYABLE</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="TotalPayable" placeholder="Total Payable" name="TotalPayable"value="<?php echo $totalpayable; ?>">
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
        <input type="text" class="form-control input-md" id="Date" placeholder="Date" name="Date" readonly="readonly" value="<?php echo $date; ?>">
      </div>
    </div>
  <div class="form-group row">
      <label class="control-label col-md-3" for="Login">LOGIN/LOGOUT</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Log" id="Log">
    <option> <?php echo $log; ?></option>
    <option>LOGIN</option>
    <option>LOGOUT</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Ola">OLA INVOICE NO </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Ola" placeholder="Ola Invoice No" name="Ola" value="<?php echo $ola; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Location">LOCATION</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Location" id="Location"  onchange="loaddata();">
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
      <label class="control-label col-md-3" for="To"> TO </label>
         <div class="col-md-3"> 
  <select class="form-control" name="Tos" id="Tos">
  <option> <?php echo $tos; ?></option>
    <option>HOME</option>
    <option>OFFICE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="PaidBy">PAID BY</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="PaidBy" placeholder="Paid By" name="PaidBy" value="<?php echo $paidby; ?>">
      </div>
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
