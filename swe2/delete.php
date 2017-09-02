  <?php require_once('classes/Manager.php');?>
   <?php require_once('classes/TeleBooker.php');?>
  <?php
   $manager=new Manager();
   $tele=new TeleBooker();
   $ty=$_GET['ty'];
   $manager->deleteTelebooker($tele,$ty);
   header("Location: ShowTelebookers.php");
          ?>