<?php include 'include/header.php'; 
$db=new Db();
$instance=new FlightInstance();
$choice=1;   

if(isset($_SESSION['telebooker'])){
     $choice=3;
}
  ?>
<div class="col-md-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Airplane</th>
                            <th>Seats</th>
                            <th>Fare</th>
                            <th>Seats Available</th> <?php
                if (isset($_SESSION['telebooker'])) {
                    
                }else{echo '<th>Operations</th>';}
                ?>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
                         $instance->showFlights($db,$choice);
                         ?>
                        </tbody>
                      </table>
</div>