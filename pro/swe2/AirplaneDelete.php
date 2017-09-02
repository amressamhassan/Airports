<?php

   require_once 'classes/Airplane.php';
   require_once 'classes/database.php';
   require_once 'classes/Class_Details.php';
   
$id=null;
if(isset($_GET["id"])){
    $id=$_GET["id"];
    
}
$db = new Db();
$ap=new Airplane(null,null,null,null,null);
$ap->deleteAirplane($db, $id);
header("Location: ShowAirplanes.php");
die();
?>
