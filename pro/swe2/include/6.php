<html>
<?php
require_once 'include/headerbegin.php';
?>
    
    <style>
        body { padding-top: 51px; margin-left:30px}
    </style>
<body style='background-image: url("background2.png"); background-origin: content-box;  background-position: center; ' >
        <div class="footer navbar-fixed-bottom" style="height:10px;bottom: -23;padding-top: 3px;">
                        <div class="container">
                          <div class="footer-copyright text-center" style="font-size: 10px;">Copyright © 2016 AirResere Flight Reservation System.All rights reserved.</div>
                        </div>
                      </div>
    <div class="navbar navbar-default navbar-fixed-top" >
          <div class="navbar-header col-md-2 ">
            <a href="index.php" class="navbar-brand"><img width="180"src="logo.png" ></a>
          </div>
          <ul class="nav navbar-nav ">
           <li class="active"><a href="home.php">User Panel</a></li>
              <li ><a href="FAQ.php">FAQ</a></li>
              <li ><a href="ShowFlightsMain.php">Flights</a></li>
             <li ><a href="login_out.php">Logout</a></li>
            </ul>
        </div>
    <div id="sidebar-wrapper" style="width: 150px; ">
        <ul class="sidebar-nav" >
            
           <li > <h5>Tickets<h5></li>
		<li ><a href="ShowTicketsTelebooker.php">Show All Tickets</a></li>
	<li >	<a href="ShowTicketsTelebookerActive.php">Show Active Tickets</a></li>
   <li > <h5>Flights<h5></li>
  <li >  <a href="ShowFlightsTelebooker.php" >Show All Flights</a></li>
  <li >  <a href="ShowFlightsTelebookerActive.php">Show Active Flights</a></li>
            
            </ul>
        </div>
    <div  style="margin-top: 15px;margin-left: 120px;">
</html>
<?php
require_once "classes/Airport.php";
require_once "classes/Airplane.php";
require_once "classes/Class_details.php";
require_once 'classes/database.php';
require_once 'classes/Flight.php';
require_once 'classes/FlightInstance.php';
?>