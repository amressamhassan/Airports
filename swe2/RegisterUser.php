<?php include 'include/header.php';  ?>
<?php require_once('classes/Manager.php');?>
<?php require_once('classes/TravelPersonnel.php');?>
<?php require_once('classes/Passenger.php');?>
<?php require_once('classes/TeleBooker.php');?>
<div class="container">
                    <form action="" method="post" >
        <table class="table">
            <tbody><tr>
                <td>Firstname</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="fname" value="Ahmed">
            </div></td>
            </tr>

            <tr>
                <td>Middlename</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="mname" value="Ahmed">
            </div></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="lname" value="Ahmed">
            </div></td>
            </tr>

              <tr>
                <td>E-mail</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="E-mail" required="" type="text" name="email">
            </div></td>
            </tr>
                 <tr>
                <td>Phone</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Phone" required="" type="text" name="phone">
            </div></td>
            </tr>
            </tr>
                 <tr>
                <td>Home Telephone</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Telephone" required="" type="text" name="telephone">
            </div></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><div class="input-group input">
                <table><tr>
                <td>Male</td><td><input class="radio" name="gender" value="1" type="radio"/></td> </tr>
                <tr>
                <td>Female</td><td><input class="radio" name="gender" value="0" type="radio"/></td> </tr>
            </table>
            </div></td>
            </tr>
               <tr>
                <td>Password</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Password" required="" type="password" name="password">
            </div></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Confirm Password" required="" type="password" name="confirmpassword">
            </div></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><div class="input-group input">
                <div class="col-md-6"><input class="form-control col-md-3" placeholder="Street and building and apartment number" required="" type="text" name="streetname"></div>
                <div class="col-md-3"><input class="form-control col-md-3" placeholder="City" required="" type="text" name="city"></div>
                <div class="col-md-3"><input class="form-control col-md-3" placeholder="Country" required="" type="text" name="country"></div>
            </div></td>
            </tr>
            <?php
              if(@$_GET['ty']=='telebooker'){?>
              <tr>
              
            
              </div></td></tr>
               <td>Wages</td>"
              <td><div class='input-group input'>
              <input class='form-control' placeholder='Wages' required='' type='text' name='wages'>
              <tr>
               <td>Booking number</td>
              <td><div class='input-group input'>
               <input class='form-control' placeholder='bookingnumber' required='' type='text' name='bookingnumber'>

                <?php }?>
                <?php if(@$_GET['ty']=='travelpersonnel'||@$_GET['ty']=='passenger'){ ?>
                <tr>
                <td>Company Name</td>
                <td><div class='input-group input'>
                <input class='form-control' placeholder='Username' required='' type='text' name='Companyname' >
                </div></td>
                </tr>
                <tr> 
                 <td>
                  <div class='form-group'>
                  <label for='exampleInputFile'>Image input</label>
                    <input name='path' id='exampleInputFile' type='file'>
                     <p class='elp-block'>Add the image to show in the front page</p>
                    </div>
                </tr>
                <tr>
                <td>Type</td>
                 <td><div class='input-group input'>
                <input class='form-control' placeholder='Username' required='' type='text' name='type'>
                </div></td>
                </tr>
                <?php }
                if(@$_GET['ty']=='manager'){?>
                              <tr>
                              </div></td></tr>
                               <td>Wages</td>
                               <td><div class='input-group input'>
                                 <input class='form-control' placeholder='Wages' required='' type='text' name='wages'>
                                 <tr>
                                 <td>Type</td>
                                 <td><div class='input-group input'>
                                  <table><tr>
                                 <td>Admin</td><td><input class='radio' name='typemanager' value='1' type='radio'/></td> </tr>
                                  <tr>
                                 <td>Manager</td><td><input class='radio' name='typemanager' value='0' type='radio'/></td> </tr>
                                 </table>
                                </div></td>
                                 </tr>
               <?php }?>
                
                <tr>
                    <td>
            </tbody>
            </table>

             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Register" type="submit">
            </div>
             <?php
            
             if(isset($_POST["submit"])){
                 if(@$_GET['ty']=='telebooker'){
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                $gender=$_POST['gender'];
                $pass=$_POST['password'];
                $conpassword=$_POST['confirmpassword'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $telephone=$_POST['telephone'];
                $city=$_POST['city'];
                $country=$_POST['country'];
                $streetname=$_POST['streetname'];
                $bookingnumber=$_POST['bookingnumber'];
               // $type=$_POST['type'];
                $wages=$_POST['wages'];
                
                $manager=new Manager();
                $Telebooker=new Telebooker();
                if($manager->addTeleBooker($Telebooker,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$pass,$streetname,$city,$country,$wages,$bookingnumber, $conpassword)){
                     $message="Successful";
                             echo "<script type='text/javascript'>alert('$message');</script>";
                 //header("Location: ShowTelebookers.php");
                 echo "<meta http-equiv='Refresh' content='0;URL=ShowTelebookers.php'/>";}
                 else{
                     $message="failed";
                             echo "<script type='text/javascript'>alert('$message');</script>";
                 }
             }
             elseif(@$_GET['ty']=='travelpersonnel'){
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                $gender=$_POST['gender'];
                $pass=$_POST['password'];
                $conpassword=$_POST['confirmpassword'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $telephone=$_POST['telephone'];
                $city=$_POST['city'];
                $country=$_POST['country'];
                $streetname=$_POST['streetname'];
               // $bookingnumber=$_POST['bookingnumber'];
               // $type=$_POST['type'];
               // $wages=$_POST['wages'];
                $companyname=$_POST['Companyname'];
                $type=$_POST['type'];
                $path=$_POST['path'];
                $manager=new Manager();
                $travel=new TravelPersonnel();
               if( $manager->addTravelPersonnel($travel,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$pass,$streetname,$city,$country,$path,$type,$companyname, $conpassword)){
                $message="Successful";
                             echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<meta http-equiv='Refresh' content='0;URL=ShowTravelPersonnel.php'/>";
               }else{
                 $message="failed";
                             echo "<script type='text/javascript'>alert('$message');</script>";
               }
                   
                     }elseif(@$_GET['ty']=='passenger'||!isset($_GET['ty'])){
                            $fname=$_POST['fname'];
                            $mname=$_POST['mname'];
                            $lname=$_POST['lname'];
                             $gender=$_POST['gender'];
                            $pass=$_POST['password'];
                            $conpassword=$_POST['confirmpassword'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                             $telephone=$_POST['telephone'];
                            $city=$_POST['city'];
                            $country=$_POST['country'];
                            $streetname=$_POST['streetname'];
                            // $bookingnumber=$_POST['bookingnumber'];
                            // $type=$_POST['type'];
                            // $wages=$_POST['wages'];
                            $companyname=@$_POST['Companyname'];
                            $type=@$_POST['type'];
                            $path=@$_POST['path'];
                            $manager=new Manager();
                            $passenger=new Passenger();
                           if($manager->addPassenger($passenger,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$pass,$streetname,$city,$country,$path,$type,$companyname,$conpassword)){
                            $message="Successful";
                             echo "<script type='text/javascript'>alert('$message');</script>";
                           //  echo "<meta http-equiv='Refresh' content='0;URL=showPassengers.php'/>";
                             }
                             else{
                                $message="failed";
                                 echo "<script type='text/javascript'>alert('$message');</script>";
                             }
                         
                     }elseif(@$_GET['ty']=='manager'){
                                 $fname=$_POST['fname'];    
                                  $mname=$_POST['mname'];
                                 $lname=$_POST['lname'];
                                 $gender=$_POST['gender'];
                                $pass=$_POST['password'];
                                 $conpassword=$_POST['confirmpassword'];
                                 $email=$_POST['email'];
                                 $phone=$_POST['phone'];
                                 $telephone=$_POST['telephone'];
                                 $city=$_POST['city'];
                                  $country=$_POST['country'];
                                  $streetname=$_POST['streetname'];
                                  //$bookingnumber=$_POST['bookingnumber'];
                                   $type=$_POST['typemanager'];
                                   $wages=$_POST['wages'];
                                    $manager=new Manager();
                                    $db=new Db();                   // $db$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$type
                                if(  $manager->addManager($db,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$pass,$streetname,$city,$country,$wages,$type, $conpassword)){
                                      $message="Successful";
                                   echo "<script type='text/javascript'>alert('$message');</script>";
                                   //echo "<meta http-equiv='Refresh' content='0;URL=ShowManagers.php'/>";
                                }
                                    else{
                                        $message="failed";
                                         echo "<script type='text/javascript'>alert('$message');</script>";
                                    }
                          }
                       
                     }
                 
        
                 
            
            
     

          // header("Location: ShowTelebookers.php");
              
       //Travel Personnel
       /*<tr>
                <td>Company Name</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="Companyname" >
            </div></td>
            <td>
            <div class="form-group">
                          <label for="exampleInputFile">Image input</label>
                          <input id="exampleInputFile" type="file" name="logopath">
                          <p class="help-block">Add the image to show in the front page</p>
                        </div>

            </td>

            <td>Type</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="type">
            </div></td>
            </tr>
            */
        //Telebooker
            /*<tr>
                <td>Booking number</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="bookingnumber">
            </div></td></tr>
            <tr>
                <td>Wages</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="wages">
            </div></td></tr> */
        //Manager
                /*<tr>
                <td>Wages</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="wages">
            </div></td></tr> 
            <tr>
                <td>Manager Type</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="managertype">
            </div></td></tr>*/
       ?>
       </form> 
        </div>
