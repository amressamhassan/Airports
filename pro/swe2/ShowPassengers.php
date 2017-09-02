<?php include 'include/header.php';  ?>
<?php require_once('classes/Manager.php');?>
<?php require_once('classes/Passenger.php');?>
<div class="col-md-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Fristname</th>
                            <th>Middlename</th>
                            <th>Lastname</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Home Telephone</th>
                            <th>Gender</th>
                            <th>Address</th>
<!--                            <th>Company Name</th>
                            <th>Company Logo</th>-->
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
                          $aa=new Manager();
                          $passenger=new Passenger();
                          $result=$aa->showPassenger($passenger);
                            // echo $row["Fname"]." ".$row["Mname"] ." ".$row["Bno"]." ".$row["wages"]."<br>" ;
                          while($row=mysqli_fetch_assoc($result)) {?>
                                  <tr>   
                                <td><?php echo $row["Fname"];?></td>
                                <td><?php echo $row["Mname"];?></td>
                                <td><?php echo $row["Lname"];?></td>
                                <td><?php echo $row["Email"];?></td>
                                <td><?php echo $row["Phone"];?></td>
                                <td><?php echo $row["Telephone"];?></td>
                                <?php if($row["Gender"]==0){ 
                                 echo  "<td>  Female</td>";
                                }else{
                                echo "<td> Male</td>";}?>
                                <td><?php echo $row["Street_name"]."-".$row["City"]."-" .$row["Country"];?></td>
                                <!--<td><?php // echo $row["Name_company"]?></td>-->
                                <!--<td><img width='30%' src=<?php // echo $row["Logo"];?>></td>-->
                                <?php 
                                //<a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                                   //<a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
                                $ty=$row["User_ID"];
                                echo "<td>"."<a href='deletepassenger.php?ty=$ty' class='btn btn-default btn-block'>Delete</a>"."<a href='ubdatePassenger.php?ty=$ty' class='btn btn-default btn-block'>update</a>"."</td>";?>
                                </tr>
                               <?php }?> 
                              
                           
                          
                        </tbody>
                      </table>
</div>
    
  