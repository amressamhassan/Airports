<?php include 'include/header.php';  ?>
<?php require_once('classes/Manager.php');?>
<?php require_once('classes/TravelPersonnel.php');?>
<div class="container">
	   <?php
             $id=$_GET['ty'];
             $manager=new Manager();
             $travel=new TravelPersonnel();
             $sql=$manager->showTravelPersonnel($travel);
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
                    $image=$row["Logo"];
                    $country=$row["Country"];
                    $namecompany=$row["Name_company"];
                    $type=$row["Type"];
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
                              <?php /*  <td>password</td>
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
                              <tr> 
                                 <td>
                                  <div class='form-group'>
                                  <label for='exampleInputFile'>Image input</label>
                                   <input name='logo' id='exampleInputFile' type='file'>
                                   <p class='elp-block'>Add the image to show in the front page</p>
                                 </div>                                      
                                   </tr>
                                 <tr>
                                <td>Company Name</td>
                                <td><div class='input-group input'>
                                <input class='form-control' placeholder='Username' required='' type='text' name='company' value=<?php echo $namecompany;?>>
                                 </div></td>
                                </tr>
                                 <tr>
                                <td>Type</td>
                                <td><div class='input-group input'>
                              <input class='form-control' placeholder='Username' required='' type='text' name='type' value=<?php echo $type;?>>
                                 </div></td>
                                </tr>
                                <tr>
                                  <div class='col-md-2'>
                                 <td><input class='btn btn-info btn-block' name='submit' value='Update' type='submit'></td>
                                 </div>
                                 </tr>
                                   </tbody>
                                    </table>
                                    </form>"
                                <?php   //<a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                                   //<a href="RegisterUser.php?ty=passenger" class="btn btn-default btn-block">Add</a>
                                }
}
            

             if(isset($_POST["submit"])){
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
               // $pass=$_POST['pass'];
                //$conpassword=$_POST['confirmpass'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $telephone=$_POST['telephone'];
                $city=$_POST['city'];
                $country=$_POST['country'];
                $streetname=$_POST['streetname'];
                $company=$_POST['company'];
                $logo=$_POST['logo'];
                $type=$_POST['type'];
                $manager=new Manager();
                $travel=new TravelPersonnel();
                if(
                $manager->updateTravelPersonnel($travel,$id,$fname,$mname,$lname,$email,$phone,$telephone,
                    $i,$pass,$streetname,$city,$country,$logo,$type,$company))
                {
                      $message="Successful";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<meta http-equiv='Refresh' content='0;URL=ShowTravelPersonnel.php'/>";
             }else{
                  $message="failed";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
             }

                  
              
            }
            ?>