<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ola TripData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
<?php require_once 'NewTripval.php' ?>
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
.required {
  color: red;
}
</style>
				
<div class="container-fluid">
				
				<div class="row">
				<form class="form-horizontal" method="post" action="OlaTripval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM tripdataola";
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
      <label class="control-label col-md-3" for="TripDate">TRIP DATE <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="TripDate" placeholder="Trip Date" name="TripDate"required>
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" onkeyup="loadlocation();" placeholder="Emp ID" name="EmpID"required>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Details">DETAILS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Details" id="Details">
    <option>PICKUP</option>
    <option>DROP</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Froms">FROM</label>
     <div class="col-md-3"> 
  <select class="form-control" name="Froms" id="Froms">
    <option>HOME</option>
    <option>OFFICE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="TotalPayable">TOTAL PAYABLE <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="TotalPayable" placeholder="Total Payable" name="TotalPayable" >
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
        <input type="text" class="form-control input-md" readonly="readonly" id="Date" placeholder="Date" name="Date">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Login">LOGIN/LOGOUT</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Log" id="Log">
    <option>LOGIN</option>
    <option>LOGOUT</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="OlaInvoice">OLA INVOICE NO <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Ola" placeholder="Ola Invoice No" name="Ola"required>
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
      <label class="control-label col-md-3" for="To"> TO </label>
         <div class="col-md-3"> 
  <select class="form-control" name="Tos" id="Tos">
    <option>HOME</option>
    <option>OFFICE</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="PaidBy">PAID BY</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="PaidBy" placeholder="Paid By" name="PaidBy" >
      </div>
    </div>
	<div class="form-group row">
	<label class="control-label col-md-3" for="submit"></label>
      <div class="col-md-3"> 
   <input type="submit" name="submit" id="submit" class="btn btn-info" value="SUBMIT">
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
</html>
