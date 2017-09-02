<?php
require_once 'include/header.php';
$id=@$_GET['id'];
?>
<div class="container">
<h3>Are you sure you want to delete this?</h3>


       <?php   
         if(isset($_GET['id_resv'])&&($_SESSION['manager_type']==1||isset($_SESSION['telebooker'])))
                        {
                        ?>
        <a class="btn btn-warning" href="ShowTicketsPassengerActive.php?id_resv=<?php echo $_GET['id_resv'];?>&id=<?php  echo $id; ?>">yes</a> |
        <a class="btn btn-warning" href="ShowTicketsPassengerActive.php?id_resv=<?php  echo $_GET['id_resv']; ?>">No</a>                 
                        <?php
                        }
                        else{
                            ?>
 <a class="btn btn-warning" href="ShowTicketsPassengerActive.php?id=<?php  echo $id; ?>">yes</a> |
  <a class="btn btn-warning" href="ShowTicketsPassengerActive.php">No</a>                        
      <?php 
                            
                        }
                        ?>
</div>