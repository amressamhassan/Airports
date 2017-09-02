   <?php include 'include/header.php'; 
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

      <div class="container">
   <form action="" method="post" >
    <table class="table">
      <tr>
        <td class="col-md-1">Flight</td>
          <td>  <div class="col-md-7">
                <select name="flightid" width="300" style="width: 100%">
                 <?php
                 $instance->showFlightsSelect($fl, $db, $aap, $dap);
                 ?>
                 
               </select>
             </div>
      </td>
      </tr>
        <td class="col-md-3">Depart Date</td>
          <td>  
            <div class="col-md-3">
                <!--use value to put update info in this input-->
                <input name="date" type="text" id="datepicker"></input>
             </div>
      </td>
      </tr>
       <tr>
        <td class="col-md-1">Depart Time</td>
          <td>  <div class="col-md-3"><select name="time" width="300" style="width: 100%">
  <option value="0">00:00</option>
  <option value="1">1:00</option>
  <option value="2">2:00</option>
  <option value="3">3:00</option>
  <option value="4">4:00</option>
  <option value="5">5:00</option>
  <option value="6">6:00</option>
  <option value="7">7:00</option>
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  <option value="16">16:00</option>
  <option value="17">17:00</option>
  <option value="18">18:00</option>
  <option value="19">19:00</option>
  <option value="20">20:00</option>
  <option value="21">21:00</option>
  <option value="22">22:00</option>
  <option value="23">23:00</option>
</select>
             </div>
      </td>
      </tr>  
      
            <tr>
        <td class="col-md-1">Airplane</td>
          <td>  <div class="col-md-3">
                <select name="airplane" width="300" style="width: 100%">
                 
                  <?php
                  $instance->showAirplanesSelect($db, $airplane);
                  ?>
               </select>
             </div>
      </td>
      </tr>  
      <tr>
      <td><button class="btn btn-info" type="submit">Submit</button></td>
      </tr>
      
      </table>           
             </form>  
               
</div>
       
<?php
$datetime;
if(isset($_POST['flightid'])){
    $instance->setLegid($_POST['flightid']);
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


$success=false;
if($instance->getAirplane()!=""&&$instance->getArrivedate()!=""&&$instance->getArrivetime()!=""&&$instance->getDepartdate()!=""&&$instance->getDeparttime()!=""&&$instance->getFlight()!=""){
  
    $success=$instance->addFlightInstance($db);
    
}
if($success){
    $message="Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
}
?>