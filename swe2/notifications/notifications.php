<?php
session_start();  
require_once('../classes/Customer.php');
require_once('../classes/database.php');
require_once('../classes/ticket.php');
$c=new Customer();
$d=new Db();
$t=new ticket();  
$t=new ticket();
$t->set_id_customer(@$_SESSION['id']);     
$result=$c->show_tict($d,$t);
while ($r=@mysqli_fetch_array($result))
{
    $t->set_Ticket_ID($r['Ticket_ID']);
    $result1= $c->display($d,$t);

while ($row=mysqli_fetch_array($result1)){
    $msg=$row['msg']." trip number ".$row['id_fight'];
    $msg2='<div class="alert alert-success">'.$msg.'</div>';
    
    //echo "<script type='text/javascript'>alert('$msg');</script>";
    //echo "d";
    ?>    

                
        <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $msg2; ?>    
        </div>
    </div>
            
	    <?php 
    $d->Update('msgonetomeny',$t->get_Ticket_ID(),'id_t'
        ,'`read`',1);

}}
?>
	    		        
   

</script>


</body>
</html>
