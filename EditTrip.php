<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit TripData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
		function myFunction() {
		var fix=document.getElementById( "FixedFare" ).value;
		var extra=document.getElementById( "ExtraPay" ).value;
		var bb=document.getElementById( "B2B" ).value;		
				   var f=parseInt(fix);
                    var e=parseInt(extra);
                    var b=parseInt(bb);
                    if(f!=0)
                    {
                    var pp=0;
				 pp=(f)+(e)-(b);
				
                    document.getElementById( "Total" ).value=pp;
                    return pp;
				}

				                else
                {
                alert("Error in the input values")
                }
		}
		</script>
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
<script type="text/javascript">
		
function loadname()
{
	 var names=document.getElementById( "EmpID" ).value;

 if(names)
 {
  $.ajax({
  type: 'post',
  url: 'Loadn.php',
  data: {
   ename:names,
  },
  
  success: function (response) {
;
   // We get the element having id of display_info and put the response inside it
   $('#Name').val(response);

  }
  });
 }
	
 else
 {
  $( '#Name' ).html("Please Enter Some Words");
 }
}
</script>
<script type="text/javascript">

function loaddata()
{
	 var name=document.getElementById( "Location" ).value;
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'Load.php',
  data: {
   Location:name,
  },
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#FixedFare' ).val(response);
  }
  });
 }
	
 else
 {
  $( '#FixedFare' ).html("Please Enter Some Words");
 }
}

</script>
</head>
<body>
<?php require_once 'EditTripval.php' ?>
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
				<form class="form-horizontal" method="post" action="EditTripval.php">
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
      <label class="control-label col-md-3" for="TripDate">TRIP DATE</label>
      <div class="col-md-3">          
        <input type="date" class="form-control input-md" id="TripDate" placeholder="Trip Date" name="TripDate" value="<?php echo $tdate; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="TripDate">TIME IN/OUT</label>
      <div class="col-md-3">          
        <input type="time" class="form-control input-md" id="Time" placeholder="Time" name="Time" required value="<?php echo $time; ?>">
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID</label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" onkeyup="loadlocation(),loadname();" placeholder="Emp ID" name="EmpID" value="<?php echo $empid; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Details">DETAILS</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Details" id="DETAILS">
  <option> <?php echo $details; ?></option>
    <option>PICKUP</option>
    <option>DROP</option>
  </select>
      </div>
    </div>

	<div class="form-group row">
      <label class="control-label col-md-3" for="ExtraPay">EXTRA PAY</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="ExtraPay" placeholder="Extra Pay" name="ExtraPay" value="<?php echo $extrapay; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="FixedFare">FIXED FARE</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md"readonly="readonly" id="FixedFare" placeholder="Fixed Fare" name="FixedFare" value="<?php echo $fixed; ?>">
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
        <input type="text" class="form-control input-md" id="Date" readonly="readonly" placeholder="Date" name="Date" value="<?php echo $date; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-md-3" for="Log">LOGIN/LOGOUT</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Log" id="Log">
  <option> <?php echo $log; ?></option>
    <option>LOGIN</option>
    <option>LOGOUT</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">DRIVER ID </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="DriverID" placeholder="Driver ID" name="DriverID" value="<?php echo $drid; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">EMPLOYEE NAME </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="EMP NAME" readonly="readonly" value="<?php $name ?>" name="Name"  >
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
      <label class="control-label col-md-3" for="B2B">B TO B</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="B2B" placeholder="B2B" name="B2B" value="<?php echo $b2b; ?>">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Total">TOTAL COST</label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Total" readonly="readonly" placeholder="Total Cost" onmouseover="myFunction();" name="Total" value="<?php echo $total; ?>">
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
