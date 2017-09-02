<?php

   require_once 'classes/Airplane.php';
   require_once 'classes/database.php';
   require_once 'classes/Class_Details.php';

$cd1=new Class_Details();
$cd2=new Class_Details();
$cd3=new Class_Details();
$cd4=new Class_Details();
$ap = new Airplane(null,$cd1,$cd2,$cd3,$cd4);

$db=new Db();
if(isset($_POST['id'])){
    $ap->setId($_POST['id']);
    $ap->getCd1()->setId_airplane($ap->getId());
    $ap->getCd2()->setId_airplane($ap->getId());
    $ap->getCd3()->setId_airplane($ap->getId());
    $ap->getCd4()->setId_airplane($ap->getId());
}
$ap->setAirplaneFromDB($db, $ap->getId());
if(isset($_POST['cdname1'])){
    $ap->getCd1()->setClass_name($_POST['cdname1']);
}
if(isset($_POST['cds1'])){
    $ap->getCd1()->setSeats($_POST['cds1']);
}
if(isset($_POST['cdname2'])){
    $ap->getCd2()->setClass_name($_POST['cdname2']);
}
if(isset($_POST['cds2'])){
    $ap->getCd2()->setSeats($_POST['cds2']);
}
if(isset($_POST['cdname3'])){
    $ap->getCd3()->setClass_name($_POST['cdname3']);
}
if(isset($_POST['cds3'])){
    $ap->getCd3()->setSeats($_POST['cds3']);
}
if(isset($_POST['cdname4'])){
    $ap->getCd4()->setClass_name($_POST['cdname4']);
}
if(isset($_POST['cds4'])){
    $ap->getCd4()->setSeats($_POST['cds4']);
}
if($ap->getId()!=""){
    $ap->updateAirplane($db);
    header("Location: ShowAirplanes.php");
        die();
    }
