<?php include 'include/header.php';  ?>
<?php require_once('classes/Manager.php');?>
<?php require_once('classes/TeleBooker.php');?>
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
                            <th>Address</th>
                            <th>Booking number</th>
                            <th>Wages</th>
                            <th>Operations</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $aa=new Manager();
                          $tele=new TeleBooker();
                          $result=$aa->showTelebooker($tele);
                            // echo $row["Fname"]." ".$row["Mname"] ." ".$row["Bno"]." ".$row["wages"]."<br>" ;
                          while($row=mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                <td><?php echo $row["Fname"];?></td>
                                <td><?php echo $row["Mname"];?></td>
                                <td><?php echo $row["Lname"];?></td>
                                <td><?php echo $row["Email"];?></td>
                                <td><?php echo $row["Phone"];?></td>
                                <td><?php echo $row["Telephone"]?></td>
                                <?php if($row["Gender"]==0){
                                  echo "<td>"."Female"."</td>";
                                }else{
                                echo "<td>"."Male"."</td>";
                              }?>
                                <td><?php echo $row["Street_name"]." ".$row["City"]." " .$row["Country"];?></td>
                                <td><?php echo $row["Bno"];?></td>
                                <td><?php echo $row["wages"];?></td>
                                <?php
                                //<a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                                   //<a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
                                $ty=$row["User_ID"];
                                echo "<td>"."<a href='delete.php?ty=$ty' class='btn btn-default btn-block'>Delete</a>"."<a href='updatetelebooker.php?ty=$ty' class='btn btn-default btn-block'>update</a>"."</td>";
                                echo "</tr>";
                               } 
                              
                           
                          ?>
                      
                       </tbody>
                      </table>
                      </div>
                          <?php


                         /* <tr>
                            <td>ahmed_aaa</td>
                            <td>ahmed_abdal3al@gmail.com</td>
                            <td>012321333</td>
                            <td>0237446666</td>
                            <td>Male</td>
                            <td>3rd appartment 2nd floor 113 Champs Elysee - Paris - France</td>
                            <td>31312</td>
                            <td><button class="btn btn-warning">Delete</button><button class="btn btn-info">update</button></td>
                          </tr>
                          <tr>
                            <td>ahmed_aaa</td>
                            <td>ahmed_abdal3al@gmail.com</td>
                            <td>012321333</td>
                            <td>0237446666</td>
                            <td>Male</td>
                            <td>3rd appartment 2nd floor 113 Champs Elysee - Paris - France</td>
                            <td>31312</td>
                            <td><button class="btn btn-warning">Delete</button><button class="btn btn-info">update</button></td>
                          </tr>
                          <tr>
                            <td>ahmed_aaa</td>
                            <td>ahmed_abdal3al@gmail.com</td>
                            <td>012321333</td>
                            <td>0237446666</td>
                            <td>Male</td>
                            <td>3rd appartment 2nd floor 113 Champs Elysee - Paris - France</td>
                            <td>31312</td>
                            <td><button class="btn btn-warning">Delete</button><button class="btn btn-info">update</button></td>
                          </tr>
                          <tr>
                            <td>ahmed_aaa</td>
                            <td>ahmed_abdal3al@gmail.com</td>
                            <td>012321333</td>
                            <td>0237446666</td>
                            <td>Male</td>
                            <td>3rd appartment 2nd floor 113 Champs Elysee - Paris - France</td>
                            <td>31312</td>
                            <td><button class="btn btn-warning">Delete</button><button class="btn btn-info">update</button></td>
                          </tr>
                          <tr>
                            <td>ahmed_aaa</td>
                            <td>ahmed_abdal3al@gmail.com</td>
                            <td>012321333</td>
                            <td>0237446666</td>
                            <td>Male</td>
                            <td>3rd appartment 2nd floor 113 Champs Elysee - Paris - France</td>
                            <td>31312</td>
                            <td><button class="btn btn-warning">Delete</button><button class="btn btn-info">update</button></td>
                          </tr>
                        </tbody>
                      </table>
</div>*/
?>
