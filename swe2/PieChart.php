<?php
require_once 'classes/Reports.php';
require_once 'classes/database.php';
$db = new Db();
$linegraph = new Reports();

$linegraph->showPieChartRatings($db);