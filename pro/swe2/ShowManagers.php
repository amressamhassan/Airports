<?php include 'include/header.php';  ?>
<?php require_once('classes/TravelPersonnel.php');?>
<?php require_once('classes/database.php');?>
<?php require_once('classes/Manager.php');?>
<div class="col-md-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>FirstName</th>
                            <th>MiddleName</th>
                            <th>LastName</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Home Telephone</th>
                            <th>Gender</th>
                            <th>Type</th> 
                            <th>Address</th>
                             <th>wages</th> 
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $aa=new Manager();
                        $db=new Db();
                          $result=$aa->ShowManager($db);?>
                        <?php    // echo $row["Fname"]." ".$row["Mname"] ." ".$row["Bno"]." ".$row["wages"]."<br>" ;
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
                            <?php   if($row["id_type"]==1){
                                  echo "<td>"."Manager"."</td>";
                                }else{
                                echo "<td>"."Admin"."</td>";
                              }?>
                               <td><?php echo $row["Street_name"]."-".$row["City"]."-" .$row["Country"];?></td>
                               <td><?php echo $row["wages"];?></td>
                             <?php   //<a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                                   //<a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
                                $ty=$row["User_ID"];
                                echo "<td>"."<a href='deletemanager.php?ty=$ty' class='btn btn-default btn-block'>Delete</a>"."<a href='updatemanager.php?ty=$ty' class='btn btn-default btn-block'>update</a>"."</td>";?>
                                </tr><?php  } ?>
                              
                      
                        </tbody>
                      </table>
</div>