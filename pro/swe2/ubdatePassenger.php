<?php include 'include/header.php';  ?>
<?php require_once('classes/Manager.php');?>
<div class="container">
             <?php
             $id=$_GET['ty'];
             $manager=new Manager();
             $passenger=new Passenger();
             $sql=$manager->showPassenger($passenger);
              while($row=mysqli_fetch_assoc($sql)) {
                if($row["User_ID"]==$id){
                   $fname=$row["Fname"];
                    $mname=$row["Mname"];
                    $lname=$row["Lname"];
                    $phone=$row["Phone"];
                    $email=$row["Email"];
                    $pass=$row["Password"];
                    $i=$row["Gender"];
                    $tele=$row["Telephone"];
                    $street=$row["Street_name"];
                    $city=$row["City"];
                   // $image=$row["Logo"];
                    $country=$row["Country"];
                   // $type=$row["Type"];
                    ?>
                               <form action='' method='post' >
                                 <table class='table'>
                                <tbody><tr>
                                <td>Firstname</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='fname' value=<?php echo $fname;?>>
                              </div></td>
                               </tr>
                                <tr>
                                <td>Middlename</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='mname' value=<?php echo $mname;?>>
                                 </div></td>
                                </tr>
                                <tr>
                                <td>Lastname</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='lname' value=<?php echo $lname ;?>>
                               </div></td>
                                    </tr>
                                <tr>
                                <td>Email</td>
                                <td><div class='input-group input'>
                                 <input class='form-control' placeholder='Username' required='' type='text' name='email' value=<?php echo $email; ?>>
                                 </div></td>
                                </tr>
                                 <tr>
                              <?php /* <td>password</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='pass' value=<?php echo $pass;?>>
                                 </div></td>
                                </tr>
                                    <tr>
                                <td>confirm password</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='confirmpass' value=<?php echo $pass;?>>
                                </div></td>
                                </tr>*/?>
                                <tr>
                                <td>Phone</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='phone' value=<?php echo $phone;?>>
                                </div></td>
                                </tr>
                                <tr>
                                <td>Telephone</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='telephone' value=<?php echo $tele;?>>
                                </div></td>
                                </tr>
                                <tr>
                                <td>Gender</td>
                                <td><div class='input-group input'>
                                <table><tr>
                                 <td>Male</td><td><input class='radio' name='gender' value='1' type='radio'/></td> </tr>
                                <tr>
                                 <td>Female</td><td><input class='radio' name='gender' value='0' type='radio'/></td> </tr>
                                 </table>
                                </div></td>
                                 </tr>
                                <tr>
                                 <td>Address</td>
                                <td><div class='input-group input'>
                                <div class='col-md-6'><input class='form-control col-md-3' placeholder='Street and building and apartment number' required='' type='text' name='streetname' value=<?php echo $street?>></div>
                                <div class='col-md-3'><input class='form-control col-md-3' placeholder='City' required='' type='text' name='city' value=<?php echo $city;?>></div>
                                <div class='col-md-3'><input class='form-control col-md-3' placeholder='Country' required='' type='text' name='country' value=<?php echo $country?>></div>
                               </div></td>
                                </tr>
                                
                               
                              
                                </tbody>
                                    </table>
                                  <div class='col-md-2'>
                                 <td><input class='btn btn-info btn-block' name='submit' value='Update' type='submit'></td>
                               
                                   
                                    </form>"
                                <?php   //<a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                                   //<a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
                                }
}
            
            

             if(isset($_POST["submit"])){
               $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                //$pass=$_POST['pass'];
               // $conpassword=$_POST['confirmpass'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $telephone=$_POST['telephone'];
                $city=$_POST['city'];
                $country=$_POST['country'];
                $streetname=$_POST['streetname'];
               
               // $logo=$_POST['logo'];
               // $type=$_POST['type'];
                $manager=new Manager();
                $passenge=new Passenger();
          if(
               $manager->updatePassenger($passenge,$id,$fname,$mname,$lname,$email,$phone,$telephone,$i,$pass
                ,$streetname,$city,$country)){
              $message="Successful";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                    
                
                                    
                if(isset($_GET['check'])){echo "<meta http-equiv='Refresh' content='0;URL=PassengerPanel.php'/>";}else{echo "<meta http-equiv='Refresh' content='0;URL=showPassengers.php'/>";}
                   
           }else{
              $message="failed";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
           }
                    //die();
                  
              
            }
            ?>
                