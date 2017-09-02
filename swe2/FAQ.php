<?php include 'include/header.php';
$check=false;
if(isset($_GET['check'])){
    $check=true;
}
$faq=new FAQ();
$db = new Db();
?>
<div class="container " style="margin-bottom: 10px">
<?php
$faq->showFAQ($db,$check);

?>
</div>