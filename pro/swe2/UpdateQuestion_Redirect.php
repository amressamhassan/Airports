<?php
require_once 'classes/database.php';

require_once 'classes/FAQ.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id=0;
if(isset($_POST['id'])){
    $id=$_POST['id'];
}
$question;
if(isset($_POST['question'])){
    $question =$_POST['question'];
}
$db=new Db();
$faq = new FAQ();
$faq->setQuestion($question);
$faq->updateQuestion($db, $id);
header("Location: FAQ.php?check=true");
die();
