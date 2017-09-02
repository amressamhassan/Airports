<?php
include "include/header.php";
 require_once('classes/TravelPersonnel.php');
 $travelpersonnel=new TravelPersonnel();
 $db=new Db();

 if(isset($_GET['id_resv'])&&$_SESSION['manager_type']==1){
     $r=mysqli_fetch_array($travelpersonnel->show_profile($db,$_GET['id_resv']));
     $_SESSION['id_resv_tele']=2;
 }
 else
 {
      
     $r=mysqli_fetch_array($travelpersonnel->show_profile($db,$_SESSION['id_person']));
 
 }
?>
<div class="container">
	<div class="col-md-3">
	
        	 <?php if(isset($_GET['id_resv']))
		 {?>
		 	<a href="ShowTicketsTravelPersonnel.php?id_resv=<?php echo $_GET['id_resv'];?>" class="btn btn-default btn-block">Show All Tickets</a>
		<a href="ShowTicketsTravelPersonnelActive.php?id_resv=<?php echo $_GET['id_resv'];?>" class="btn btn-default btn-block">Show Active Tickets</a>
		<a href="ReserveTicket.php?id_resv=<?php echo $_GET['id_resv'];?>" class="btn btn-default btn-block">Reserve a ticket</a>
		<?php }
         else {
             ?>
             <a href="ShowTicketsTravelPersonnel.php" class="btn btn-default btn-block">Show All Tickets</a>
		<a href="ShowTicketsTravelPersonnelActive.php" class="btn btn-default btn-block">Show Active Tickets</a>
         <a href="ReserveTicket.php" class="btn btn-default btn-block">Reserve a ticket</a>
             
             
            <?php
         }?>
	</div>
	<div class="col-md-9">
		<table class="table ">
                        <tbody>
                          <tr>
                            <td>Company Name </td>
                            <td><?php echo $r['Name_company'];?></td>
                          </tr>
                          <tr>
                            <td>Company Logo</td>
                            <td><img width="15%" src="airlineinclogo.png"></td>
                          </tr>
                          <tr>
                            <td>Type</td>
                            <td><?php echo $r['Type'];?></td>
                          </tr>
                          <tr>
                          	<td>User name</td>
                          	<td ><?php echo $r['Fname']." ".$r['Mname']." ".$r['Lname'];?></td>
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
                               <td><a href="updatetravelpersonnel.php?check=true&ty=<?php echo $r['id_person']; ?>" class='btn btn-primary btn-block'>Update</a></td>
                          </tr>
                        </tbody>
                      </table>
	</div>
</div>