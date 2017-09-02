<?php require_once('classes/Manager.php');?>
<?php require_once('classes/TravelPersonnel.php');?>
<?php
 	$manager=new Manager();
 	$id=$_GET['ty'];
 	$travel=new TravelPersonnel();
 	$manager->deleteTravelPersonnel($travel,$id);
 	header("Location: ShowTravelpersonnel.php");
?>