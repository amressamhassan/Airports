<?php include 'include/header.php'; 
$db=new Db();
$instance=new FlightInstance();

        ?>

     	<div class="container">
       <form action="" method="post" >
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
                             <th>Available Seats</th>
                            <th>Operations</th>
                       
                          </tr>
                        </thead>
                        <tbody>
                               <?php
                         $instance->showFlights($db,2);
                         ?>
                        </tbody>

    </table>           
    </form>
               
</div>
