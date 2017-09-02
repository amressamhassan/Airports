<html>
<?php
require_once 'include/headerbegin.php';
?>

    <style>
        body { padding-top: 80px; }
    </style>
   
<body  style='background-image: url("background2.png"); background-origin: content-box;  background-position: center; '>
        <div class="footer navbar-fixed-bottom" style="height:10px;bottom: -23;padding-top: 3px;">
                        <div class="container">
                          <div class="footer-copyright text-center" style="font-size: 10px;">Copyright © 2016 AirResere Flight Reservation System.All rights reserved.</div>
                        </div>
                      </div>
    <div class="navbar navbar-default navbar-fixed-top" >
          <div class="navbar-header col-md-2 ">
            <a href="index.php" class="navbar-brand"><img width="180"src="logo.png" ></a>
          </div>
          <ul class="nav navbar-nav">
              <li ><a href="FAQ.php">FAQ</a></li>
              <li class="active"><a href="Login.php">Login</a></li>
              <li ><a href="ShowFlightsMain.php">Flights</a></li>
                 <li ><a href="RegisterUser.php?ty=''">Register</a></li>
            </ul>
        </div>
</html>
<?php
require_once "classes/Airport.php";
require_once "classes/Airplane.php";
require_once "classes/Class_details.php";
require_once 'classes/database.php';
require_once 'classes/Flight.php';
require_once 'classes/FlightInstance.php';
?>
