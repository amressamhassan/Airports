<?php include 'include/header.php'; 
$db=new Db();
$instance=new FlightInstance();
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
                            <th>Seats Available</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
                         $instance->showFlights($db,5);
                         ?>
                        </tbody>
                      </table>
</div>