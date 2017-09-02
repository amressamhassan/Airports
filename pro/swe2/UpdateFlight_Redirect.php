<?php

include'include/header.php';
$dap=new Airport();
$aap=new Airport();
$fl=new Flight();
$db=new Db();
$id1=null;
$id2=null;
if(isset($_POST['id'])){
   $fl->setFlightid($_POST['id']);
}
if(isset($_POST['from'])){
    $dap->setAirportFromDB($db, $_POST['from']);
    $fl->setDepartAirport($dap);
    $id1=$_POST['from'];
}
if(isset($_POST['to'])){
    $aap->setAirportFromDB($db, $_POST['to']);
    $fl->setArriveAirport($aap);
    $id2=$_POST['to'];
}
if(isset($_POST['fare'])){
    $fl->setFare($_POST['fare']);
}
if(isset($_POST['dur'])){
    $fl->setSchDuration($_POST['dur']);
}

if($id1!=$id2){
if($fl->getFare()!=""&&$fl->getSchDuration()!=""&&$fl->getArriveAirport()!=null&&$fl->getDepartAirport()!=null){
    $fl->updateFlight($db);
    header("Location: ShowFlights.php");
    die();
}}
