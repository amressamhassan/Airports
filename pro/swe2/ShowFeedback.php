<?php include 'include/header.php'; 
$db=new Db();
$feedback=new Feedback();
$customer = new Customer();
?>
<div class="container " style="margin-bottom: 10px">
<?php
$feedback->showFeedback($db,$customer);

?>
</div>




