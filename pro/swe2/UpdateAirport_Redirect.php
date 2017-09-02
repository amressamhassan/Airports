<?php

   require_once 'classes/Airport.php';
   require_once 'classes/database.php';
$ar=new Airport();
$db=new Db();
if(isset($_POST['code'])){
    $ar->setCode($_POST['code']);
}
if(isset($_POST['name'])){
    $ar->setName($_POST['name']);
}
if(isset($_POST['city'])){
    $ar->setCity($_POST['city']);
}
if(isset($_POST['country'])){
    $ar->setCountry($_POST['country']);
}
if(isset($_POST['id'])){
    $ar->setId($_POST['id']);
}
if($ar->getCountry()!=""&&$ar->getCity()!=""&&$ar->getCode()!=""&&$ar->getName()!=""){
    $ar->updateAirport($db);
    header("Location: ShowAirports.php");
        die();
    }
