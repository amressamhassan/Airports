<?php
   require_once 'classes/Airport.php';
   require_once 'classes/database.php';
$id=null;
if(isset($_GET["id"])){
    $id=$_GET["id"];
    
}
$db = new Db();
$ar=new Airport();
$ar->deleteAirport($db, $id);
header("Location: ShowAirports.php");
die();
?>
