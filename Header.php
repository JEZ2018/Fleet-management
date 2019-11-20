<?php
include("Check.php");
?>
<style>
.dropdown-menu a:hover {background-color: #ddd;}


.dropdown:hover .dropdown-menu {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropdown-toggle {background-color: black;}
</style>
<div class="conatiner-fluid">
<nav class="navbar navbar-inverse">

    <div class="navbar-Header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Home.php">
    <img src="sun.png" alt="SUN" style="width:30px;">
  </a>
    </div>
    <div class="collapse navbar-collapse" data-hover="dropdown" id="myNavbar">
      <ul class="nav navbar-nav">
		<p class="navbar-text">Fleet Management</p>
		
      </ul>
      <ul class="nav navbar-nav navbar-right"> 
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="AddAdmin.php">	<b><?php
	echo $_SESSION['username'];?></b> <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="Logout.php">Logout  <span class="glyphicon glyphicon-off"></span> </a></li>                    	
        </ul>
      </li>
  
		
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="AddAdmin.php"><b>ADMIN</b>  <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="NewAdmin.php">ADD NEW USER</a></li>
        <li><a href="ShowAdmin.php">SHOW/MODIFY USER</a></li>                      	
        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Report.php"><b>REPORTS</b>  <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="MonthlyReport.php">MONTHLY REPORTS</a></li>
        <li><a href="DriverReport.php">DRIVER REPORTS</a></li>   
<li><a href="OlaReport.php">OLA REPORTS</a></li>
        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Fare.php"><b>FARE MASTER</b>  <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="AddPlace.php">ADD NEW PLACE</a></li>
        <li><a href="ShowPlace.php">SHOW/EDIT PLACE DETAILS</a></li>                        	
        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Driver.php"><b>DRIVER MASTER</b>  <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="AddDriver.php">ADD NEW DRIVER</a></li>
        <li><a href="ShowDriver.php">SHOW/EDIT DRIVER DETAILS</a></li>                        
      </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Employee.php"><b>EMPLOYEE MASTER </b> <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="AddEmp.php">ADD NEW EMPLOYEE</a></li>
        <li><a href="ShowEmp.php">SHOW/EDIT EMPLOYEE DETAILS</a></li>                        
      </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="TripData.php"><b>TRIP DATA</b>  <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="NewTrip.php">ADD NEW TRIP</a></li>
        <li><a href="ShowTrip.php">SHOW/EDIT TRIP</a></li> 
		<li><a href="OlaTrip.php">ADD NEW OLA TRIP</a></li> 	
<li><a href="ShowOlaTrip.php">SHOW/EDIT OLA TRIP</a></li>
		
        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
        <li ><a href="Home.php"><b>HOME</b></a></li></ul>
  </div>

</nav>
</div>
<br>
<script>
$("#navbar .username").text($('.echoedUsername').text())
</script>


