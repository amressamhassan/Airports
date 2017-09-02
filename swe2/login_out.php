<?php
session_start();
require_once('classes/person.php');
$person=new Person();
$person->logout();
echo"<meta http-equiv='Refresh' content='0;URL=index.php' />";
?>