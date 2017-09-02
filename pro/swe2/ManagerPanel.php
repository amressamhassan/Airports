<?php
include "include/header.php";
require_once 'classes/Manager.php';
 $manager=new Manager();
 $db=new Db();
 $r=mysqli_fetch_array($manager->show_profile($db));
?>
<div class="">
	
  <div class="col-md-12">
  <div class="col-md-4">
    <h5>Passengers</h5>
    <a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
    <a href="ShowPassengers.php" class="btn btn-default btn-block">Show</a>
    <?php
    include "ManagePassenger.php"
    ?>

  </div>
    <div class="col-md-4">
    <h5>Telebookers</h5>
    <a href="RegisterUser.php?ty=telebooker" class="btn btn-default btn-block">Add</a>
    <a href="ShowTelebookers.php" class="btn btn-default btn-block">Show</a>
    <?php
    include "ManageTelebooker.php"
    ?>

  </div>
    <div class="col-md-4">
    <h5>Travel Personnels</h5>
    <a href="RegisterUser.php?ty=travelpersonnel" class="btn btn-default btn-block">Add</a>
    <a href="ShowTravelPersonnel.php" class="btn btn-default btn-block">Show</a>
    <?php
    include "ManageTravelpersonnel.php"
    ?>

  </div>
</div>
    <div class="col-md-3">
<div class="col-md-6">
    <h5>Flight Instances</h5>
    <a href="AddFlightInstance.php" class="btn btn-default btn-block">Add a <br>flight</a>
    <a href="ShowFlightInstances.php" class="btn btn-default btn-block">Show <br>All<br> Flights</a>
    <a href="ShowFlightInstancesActive.php" class="btn btn-default btn-block">Show <br> Active<br> Flights</a>
  </div>
  <div class="col-md-6">
    <h5>Flights</h5>
    <a href="AddFlight.php" class="btn btn-default btn-block">Add</a>
    <a href="ShowFlights.php" class="btn btn-default btn-block">Show</a>
  </div>

    <div class="col-md-6">
<h5>Tickets</h5>
    <a href="ShowTicketsManager.php" class="btn btn-default btn-block">Show <br>All<br>Tickets</a>
    <a href="ShowTicketsManagerActive.php" class="btn btn-default btn-block">Show<br>Active<br>Tickets</a>
  </div>
<div class="col-md-6">
    <h5>Airports</h5>
    <a href="AddAirport.php" class="btn btn-default btn-block">Add</a>
    <a href="ShowAirports.php" class="btn btn-default btn-block">Show</a>
  </div>



<div class="col-md-6">
    <h5>Airplanes</h5>
    <a href="AddAirplane.php" class="btn btn-default btn-block">Add</a>
    <a href="ShowAirplanes.php" class="btn btn-default btn-block">Show</a>
  </div>
        </div>
 </div> 
	<div class="col-md-5">
		<table class="table ">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><?php echo $r['id_person'];  ?></td>
                            </tr>
                          <tr >
                          	<td>User name</td>
                          	<td ><?php echo $r['Fname']." ".$r['Mname']." ".$r['Lname'];?></td>
                          </tr>
                          <tr>
                           <td>Type</td>
                          <?php 
                          if($r['id_type']==1){
                          ?>
                          		<td>Admin</td>
                          	<?php }
                          if($r['id_type']==2){
                          ?>
                            	<td>Manager</td>
                          	<?php }
                          	?>
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
                            	<td>female</td>
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
                            <td><a href="updatemanager.php?ty=<?php echo $r['id_person']; ?>" class='btn btn-primary btn-block'>Update</a></td>
                          </tr>
                        </tbody>

                      </table>
	</div>
</div>