<?php include 'include/header.php';
require_once('classes/person.php');
$person=new Person();
$db=new Db();

if(isset($_POST['submit'])){
    $person->setEmail($_POST['email']);
    $person->setPass($_POST['password']);
    $person->login($db, $person->getEmail(), $person->getPassWord());
}
if(isset($_SESSION['manager'])&&($_SESSION['manager_type']==1)){
    echo"<meta http-equiv='Refresh' content='0;URL=AdminPanel.php' />";
}
if(isset($_SESSION['manager'])&&($_SESSION['manager_type']==2)){
    echo"<meta http-equiv='Refresh' content='0;URL=ManagerPanel.php' />";
}
if(isset($_SESSION['customer'])&&($_SESSION['Customer_Type']==1)){
    echo"<meta http-equiv='Refresh' content='0;URL=PassengerPanel.php' />";
}
if(isset($_SESSION['customer'])&&($_SESSION['Customer_Type']==2)){
    echo"<meta http-equiv='Refresh' content='0;URL=TravelPersonnelPanel.php' />";
}
if(isset($_SESSION['telebooker'])){
    echo"<meta http-equiv='Refresh' content='0;URL=TelebookerPanel.php' />";
}
?>
<div>
    <div class="container">
      <form class="form-signin" action="" method="post">
        <h3 class="form-signin-heading">Please sign in</h3>
        <div class="form-group">
          <div class="input-group col-md-12">
            <input class="form-control" name="email" id="username" placeholder="email" autocomplete="off" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group col-md-12">
            
            <input class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" type="password">
          </div>
        </div>
        <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in" />
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    
  

</div>