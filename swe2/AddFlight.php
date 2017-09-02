   <?php include 'include/header.php'; 
   $dap=new Airport();
   $aap=new Airport();
   $db=new Db();
   $fl=new Flight();

   ?>

      <div class="container">
   <form action="" method="post" >
    <table class="table">
      <tr>
        <td class="col-md-1">From</td>
          <td>  <div class="col-md-3">
                <select name="from" width="300" style="width: 100%">
                 <?php
                 $fl->showAirportsSelect($dap, $db);
                 ?>
                  
               </select>
                 
             </div>
      <h7 class="badge badge-danger">Notice : The input won't work if<br> both airports are the same</h7>
      </td>
      </tr>
       <tr>
        <td class="col-md-1">To</td>
          <td>  <div class="col-md-3">
                <select name="to" width="300" style="width: 100%">
                 
                  <?php
                 $fl->showAirportsSelect($aap, $db);
                 ?>
                  
               </select>
                 
             </div>
      </td>
      </tr>
           
      <tr>
                <td>Fare</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Ex. 183 (in $)" required="" type="text" name="fare">
            </div></td>
            </tr>
       <tr>
                <td>Scheduled Duration</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Ex. 20 (in Hours)" required="" type="text" name="dur">
            </div></td>
            </tr>
         
      <tr>
      <td><button class="btn btn-info" type="submit">Submit</button></td>
      </tr>
      
      </table>           
             </form>  
               
</div>
<?php
$id1=null;
$id2=null;
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
$success=false;
if($id1!=$id2){
if($fl->getFare()!=""&&$fl->getSchDuration()!=""&&$fl->getArriveAirport()!=null&&$fl->getDepartAirport()!=null){
$success=$fl->addFlight($db);
}
}

if($success){
    $message="Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
}
?>
