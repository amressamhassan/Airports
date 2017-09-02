<?php
$id=$_GET['q'];

require_once 'classes/database.php';
require_once 'classes/payment.php';
$db=new Db();
if($id){
$payment_main=new payment_main();
$query=$payment_main->showMethod($db, $id);

while ($row=mysqli_fetch_array($query))
{
    ?>
    
    <div class="input-group input ">
    <input class="form-control" placeholder="<?php echo $row['payment_option'];?>" required="" type="<?php echo $row['type'];?>" name="<?php echo $row['id_s_o'];?>">
    </div>
    <?php 
}

}
?>


