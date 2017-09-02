<?php
session_start();

require_once('classes/Customer.php');
require_once('classes/database.php');
require_once('classes/ticket.php');

if(isset($_SESSION['id']))
{
    if(isset($_SESSION['customer'])&&$_SESSION['Customer_Type']==1){
    require_once "2.php";
        $c=new Customer();
        $d=new Db();
      
        $t=new ticket();
        $t->set_id_customer($_SESSION['id']);
        $result=$c->show_tict($d,$t);
        while ($r=mysqli_fetch_array($result)){
            $t->set_Ticket_ID($r['Ticket_ID']);
           // echo  $r['Ticket_ID'];
        $c->display($d,$t);
        }
    }
    else{
        if(isset($_SESSION['customer'])&&$_SESSION['Customer_Type']==2){
        require_once "3.php";
        $c=new Customer();
        $d=new Db();
      
        $t=new ticket();
    
        
        
        }
    }
    if(isset($_SESSION['manager'])&&$_SESSION['manager_type']==2){
        require_once "4.php";
        }
        else{
            if(isset($_SESSION['manager'])&&$_SESSION['manager_type']==1){
        require_once "5.php";
        }
        }
    if(isset($_SESSION['telebooker'])){
        require_once "6.php";
        
    }
        
}
else{
    require_once "1.php";
}
require_once('classes/FAQ.php');
require_once "classes/Airport.php";
require_once "classes/Airplane.php";
require_once "classes/Class_details.php";
require_once 'classes/database.php';
require_once 'classes/Flight.php';
require_once 'classes/FlightInstance.php';
require_once 'classes/Feedback.php';
?>


		<div id="show"></div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('notifications/notifications.php')
			}, 6000);
		});
	</script>