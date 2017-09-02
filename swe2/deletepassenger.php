<?php require_once('classes/Manager.php');?>
<?php require_once('classes/Passenger.php');?>
<?php
$manager=new Manager();
$id=$_GET['ty'];
$Passenger=new Passenger();
$manager->deletePassenger($Passenger,$id);
   header("Location: ShowPassengers.php");
?>