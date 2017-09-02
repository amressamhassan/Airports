<?php
   require_once 'classes/Flight.php';
   require_once 'classes/Airport.php';
   require_once 'classes/database.php';
$id=null;
if(isset($_GET["id"])){
    $id=$_GET["id"];
    
}
$db = new Db();
$ap=new Flight();
$ap->deleteFlight($db, $id);
header("Location: ShowFlights.php");
die();
?>
