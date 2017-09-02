<?php
require_once 'classes/FAQ.php';
require_once 'classes/database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QuestionDelete
 *
 * @author Ahmed
 */
$id;
if($_GET['id']){
    $id=$_GET['id'];
}
$db = new Db();
$faq = new FAQ();
$faq->deleteAnswer($db, $id);
header("Location: FAQ.php?check=true");
die();