<?php
include "include/header.php";
 require_once('classes/Telebooker.php');
 $Telebooker=new TeleBooker();
 $db=new Db();
 $r=mysqli_fetch_array($Telebooker->show_profile($db));
?>

<div class="container">
	<div class="col-md-3">
    <h5>Tickets<h5>
		<a href="ShowTicketsTelebooker.php" class="btn btn-default btn-block">Show All Tickets</a>
		<a href="ShowTicketsTelebookerActive.php" class="btn btn-default btn-block">Show Active Tickets</a>
    <h5>Flight Instances</h5>
    <a href="ShowFlightInstances.php" class="btn btn-default btn-block">Show All Flights</a>
    <a href="ShowFlightInstancesActive.php" class="btn btn-default btn-block">Show Active Flights</a>
    <?php
    if(isset($_POST['id_resv']))
    include "ManagePassenger.php"
    ?>
  </div>
	<div class="col-md-9">
		<table class="table ">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><?php echo $r['id_person'];  ?></td>
                            </tr>
                          <tr>
                          	<td>User name</td>
                          	<td ><?php echo $r['Fname']." ".$r['Mname']." ".$r['Lname'];?></td>
                          </tr>
                          <tr>
                            <td>Booking Number</td>
                            <td><?php echo $r['Bno'];?></td>
                            <td>Wage</td>
                            <td><?php echo $r['wages'];?></td>
                          </tr>
                          <tr>
                            <td>First name</td>
                            <td><?php echo $r['Fname'];?></td>
                            <td>Last name</td>
                            <td><?php echo $r['Lname'];?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $r['Email'];?></td>
                          </tr>
                          <tr>
                          	<td>Mobile Phone</td>
                          	    <td><?php echo $r['Phone'];?></td>
                          	<td>Home Telephone</td>
                          	    <td><?php echo $r['Telephone'];?></td>
                          </tr>
                          <tr>
                          <td>Gender</td>
                          <?php 
                          if($r['Gender']==1){
                          ?>
                          		<td>Male</td>
                          	<?php }
                          if($r['Gender']==2){
                          ?>
                            	<td>Female</td>
                          	<?php }
                          	?>
                        
                          </tr>
                          <tr>
                            <td>Address:</td>
                            <td class="col-md-3"><?php echo $r['Street_name'];?></td>
                            <td><?php echo $r['Country'];?></td>
                            <td><?php echo $r['City'];?></td>
                          </tr>
                           <tr>
                               <td><a href="updatetelebooker.php?check=true&ty=<?php echo $r['id_person']; ?>" class='btn btn-primary btn-block'>Update</a></td>
                          </tr>
                        </tbody>

                      </table>
	</div>
</div>