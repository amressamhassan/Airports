   <?php include 'include/header.php'; 
   $dap=new Airport();
   $aap=new Airport();
   $db=new Db();
   $fl=new Flight();
   if(isset($_GET["id"])){
    $id=$_GET["id"];
    
    $fl->setFlightFromDB($db, $id, $aap,$dap);
    }
   ?>

      <div class="container">
   <form action="UpdateFlight_Redirect.php" method="post" >
    <input name="id" type="hidden" <?php echo 'value="'.$id.'"'; ?>>
    <table class="table">
      <tr>
        <td class="col-md-1">From</td>
          <td>  <div class="col-md-3">
                <select name="from" width="300" style="width: 100%">
                 <?php
                 $fl->showAirportsSelect($dap, $db,2);
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
                 $fl->showAirportsSelect($aap, $db,1);
                 ?>
                  
               </select>
                 
             </div>
      </td>
      </tr>
           
      <tr>
                <td>Fare</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. 183 (in $)" required="" type="text" name="fare" <?php echo 'value="'.$fl->getFare().'"'; ?>>
            </div></td>
            </tr>
       <tr>
                <td>Scheduled Duration</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. 20 (in Hours)" required="" type="text" name="dur" <?php echo 'value="'.$fl->getSchDuration().'"'; ?>>
            </div></td>
            </tr>
         
      <tr>
      <td><button class="btn btn-info" type="submit">Update</button></td>
      </tr>
      
      </table>           
             </form>  
               
</div>
