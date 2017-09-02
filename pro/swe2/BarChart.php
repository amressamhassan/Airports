<?php
require_once 'classes/Reports.php';
require_once 'classes/database.php';
$db = new Db();
$bargraph = new Reports();

$bargraph->showVerticalBars($db);
