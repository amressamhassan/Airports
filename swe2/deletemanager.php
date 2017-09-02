<?php require_once('classes/Manager.php');?>
<?php require_once('classes/database.php');?>
<?php
$manager=new Manager();
$db=new Db();
$id=$_GET['ty'];
$manager->deleteManager($db,$id);
header("Location: ShowManagers.php");
?>