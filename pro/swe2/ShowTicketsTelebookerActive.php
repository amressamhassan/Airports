<?php include 'include/header.php';  
require_once 'classes/database.php';
require_once 'classes/FlightInstance.php';
require_once 'classes/ticket.php';
require_once 'classes/customer.php';
require_once 'classes/payment.php';
require_once 'classes/Class_Details.php';
require_once 'classes/Flight.php';
require_once 'classes/Airplane.php';
require_once 'classes/Airport.php';
$t=new ticket();
$d=new Db();
?>
<div class="container">
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
                            <th>Seat</th>
                            <th>Class</th>
                            <th>Operations/status</th>
                          </tr>
                        </thead>
                        <?php
                        $r=$t->show_tecitm_all($d);
                        $i=1;
                        while ($row=mysqli_fetch_array($r)){?>
                        <tbody>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php  echo $row['aac'];?></td>
                            <td><?php echo $row['Date_depart']; ?></td>
                            <td><?php echo $row['Depart_time']; ?></td>
                            <td> <?php echo $row['adc']; ?></td>
                            <td><?php echo $row['Date_arr'];  ?></td>
                            <td><?php echo $row['Arr_time'];  ?></td>
                            <td><?php echo $row['Seat_no']; ?></td>
                            <td><?php echo $row['Class_Name']; ?></td>
                              <td><?php 
                              if ($row['flag']==1)
                              {
                                ?>
                           <a class="btn btn-info" href="#">active done</a>
                              <?php 
                              } 
                              else 
                              {
                              ?>
                           <a class="btn btn-warning" href="">not active</a>
                              
                                  <?php 
                                  
                              }
                              ?></td>
                          </tr>
                   <?php 
                        $i++;
                        }?>
                        </tbody>
                      </table>
</div>