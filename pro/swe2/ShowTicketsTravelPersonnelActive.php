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
$t->set_id_customer($_SESSION['id']);//ss

$id=@$_GET['id'];
if(isset($id))
{
    $customer=new Customer();
    $FlightInstance=new FlightInstance();
    $t->set_id_customer($_SESSION['id']);
    $t->delete_ticket($FlightInstance, $id);
    if($customer->delete_reservation($d, $t)){
    echo "<script type='text/javascript'>alert('book filght is remove Success');</script>";
    }
   
  else {
      echo "<script type='text/javascript'>alert('error check remove Data');</script>";
  }

    
}
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
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <?php
                     if(isset($_GET['id_resv'])&&($_SESSION['manager_type']==1||isset($_SESSION['telebooker'])))
                        {
                        $t->set_id_customer($_GET['id_resv']);
                        }
                        else {
                            $t->set_id_customer($_SESSION['id']);
                        }
                        $r=$t->show_t($d);
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
                            <td>                         
                <?php   
                               if(isset($_GET['id_resv'])&&($_SESSION['manager_type']==1||isset($_SESSION['telebooker'])))
                        {
                        ?>
                       <a class="btn btn-warning" href="DeleteTicketstraveal.php?id=<?php  echo $row['Ticket_ID'];?>&id_resv=<?php echo $_GET['id_resv'];?>">Delete</a>
                        
                        <?php
                        }
                        else{
                            ?>
                            <a class="btn btn-warning" href="DeleteTicketstraveal.php?id=<?php  echo $row['Ticket_ID']; ;?>">Delete</a>
                            <?php 
                            
                        }
                        ?>                            
                            </td>
                          </tr>
                   <?php 
                        $i++;
                        }?>
                        </tbody>
                      </table>
</div>