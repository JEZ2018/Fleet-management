<!DOCTYPE html>

<html lang="en">
<head>
  <title>New TripData</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=yes">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

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
<script>

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
				<form class="form-horizontal" method="post" action="NewTripval.php">
				<div class="col-md-5">
				
			<div class="container">
  <fieldset>
    <div class="form-group row">
      <label class="control-label col-lg-3" for="SNO">SNO</label>
      <div class="col-lg-3">
        <input type="text" class="form-control input-md" readonly="readonly" id="SNO" placeholder="SNO" name="SNO" value ="<?php
require_once 'Config.php';
$selectdata = " SELECT MAX(SNO)+1 as  SNO FROM tripdata";
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
        <input type="text" class="form-control input-md" id="TripDate"  name="TripDate" required value="<?php
		require_once 'Config.php';
$selectdata = " SELECT MAX(SNO) as  SNO FROM tripdata";
$re=mysqli_query($con,$selectdata);
$row=$re->fetch_array();
			$cs=$row['SNO'];

		$ret="SELECT TripDate from tripdata where SNO='$cs'";
		$sql=mysqli_query($con,$ret);
		
		$rows=$sql->fetch_assoc();
			$da=$rows['TripDate'];
		echo $da;
		
		?> ">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="TripDate">TIME IN/OUT <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="time" class="form-control input-md" id="Time" placeholder="Time" name="Time" required>
      </div>
    </div>
   <div class="form-group row">
      <label class="control-label col-md-3" for="EmpID">EMP ID <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="EmpID" placeholder="Emp ID" name="EmpID"required onkeyup="loadlocation(),loadname();">
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
      <label class="control-label col-md-3" for="ExtraPay">EXTRA PAY <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="ExtraPay" placeholder="Extra Pay" name="ExtraPay" value="0">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="FixedFare">FIXED FARE <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="FixedFare" readonly="readonly" placeholder="Fixed Fare" name="FixedFare" >
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
      <label class="control-label col-md-3" for="Log">LOGIN/LOGOUT</label>
      <div class="col-md-3"> 
  <select class="form-control" name="Log" id="Log">
    <option>LOGIN</option>
    <option>LOGOUT</option>
  </select>
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">DRIVER ID <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="DriverID" placeholder="Driver ID" name="DriverID"required  >
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="DriverID">EMPLOYEE NAME </label>
      <div class="col-md-3">          
        <input type="text" class="form-control input-md" id="Name" placeholder="EMP NAME" readonly="readonly" name="Name"  >
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
      <label class="control-label col-md-3" for="B2B">B TO B <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="B2B" placeholder="B2B" name="B2B" value="0">
      </div>
    </div>
	<div class="form-group row">
      <label class="control-label col-md-3" for="Total">TOTAL COST <span class="required">*</span></label>
      <div class="col-md-3">          
        <input type="number" class="form-control input-md" id="Total" placeholder="Total Cost" readonly="readonly" required name="Total" onmouseover="myFunction();">
      </div>
    </div>
	<br>
	<br>
	<br>
	<div class="form-group row">
	<label class="control-label col-md-3" for="submit"></label>
	
      <div class="col-md-3"> 
  <input type="submit" name="submit" id="submit"class="col-lg-4 btn btn-info" value= "SUBMIT">
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
