   <?php 
   require_once 'classes/Airplane.php';
   require_once 'classes/FlightInstance.php';
   require_once 'classes/Flight.php';
   require_once 'classes/Airport.php';
   require_once 'classes/Class_Details.php';
   $cd1=new Class_Details();
   $cd2=new Class_Details();
   $cd3=new Class_Details();
   $cd4=new Class_Details();
   $fl = new Flight();
   $instance= new FlightInstance();
   $instance->setFlight($fl);
   $db = new Db();
   $aap=new Airport();
   $dap = new Airport();
   $airplane = new Airplane();
   $airplane->setCd1($cd1);
   $airplane->setCd2($cd2);
   $airplane->setCd3($cd3);
   $airplane->setCd4($cd4);
   $instance->setAirplane($airplane);
   
   ?>
<?php
$datetime;
if(isset($_POST['id'])){
    $instance->setLegid($_POST['id']);
}
if(isset($_POST['flightid'])){
    $instance->getFlight()->setFlightFromDB($db,$_POST['flightid'],$aap,$dap);
}

if(isset($_POST['date'])){
    $instance->setDepartdate($_POST['date']);
}
if(isset($_POST['time'])){
     $instance->setDeparttime($_POST['time']);
     
$departdatearray=$instance->formatDate($instance->getDepartdate());
$years=$departdatearray['Year'];
$months=$departdatearray['Month'];
$days=$departdatearray['Day'];
$datetime=$instance->calcDateTime($instance->getFlight()->getSchDuration(), $instance->getDeparttime(), $days, $months, $years);
$instance->setArrivedate($datetime['Month'].'/'.$datetime['Days'].'/'.$datetime['Year']);
$instance->setArrivetime($datetime['Hours']);
}

if(isset($_POST['airplane'])){
    list($airplaneid, $seats) = preg_split ('[/]', $_POST['airplane']);
    $instance->getAirplane()-> setAirplaneFromDB($db,$airplaneid);
    $instance->setSeats($seats);
}
//var_dump($instance);

if($instance!=null){
    $instance->updateFlightInstance($db);
    $ticket=new ticket();
    $instance->notify($db, 2, $ticket);
    $choice =$_POST['choice'];
    if($choice==0){
    header("Location: ShowFlightInstances.php");}
    if($choice==1){header("Location: ShowFlightInstancesActive.php");}
        die();
    }

?>