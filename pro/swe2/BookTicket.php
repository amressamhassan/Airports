<?php
require_once 'include/header.php';
require_once 'classes/database.php';
require_once 'classes/FlightInstance.php';
require_once 'classes/ticket.php';
require_once 'classes/customer.php';
require_once 'classes/payment.php';
require_once 'classes/Class_Details.php';
require_once 'classes/Flight.php';
require_once 'classes/Airplane.php';
require_once 'classes/Airport.php';

$get=$_GET['id'];


$customer=new Customer();
$FlightInstance=new FlightInstance();
$db=new Db();
$ticket=new ticket();
$payment_main=new payment_main();
$arrval=array();
$arrid=array();
if(isset($_POST['submit']))
{
    $payment;
 
    if (isset($_POST['method'])&&@$_POST['method']==1)
    {
        
        $payment=new visa();
        $arrid[0]=6;
        $arrid[1]=7;
        $arrval[0]=@$_POST['6'];
        $arrval[1]=@$_POST['7'];
       
       
    }
    if (isset($_POST['method'])&&@$_POST['method']==2)
    {
        $arrid[0]=5;
        $arrval[0]=@$_POST['5'];
        $payment=new cash();

    }
    else {
        $payment=new nothing();
    }
   if(($payment->setarrid($db, $arrid)&&$payment->setarrval($db, $arrval))|| $_SESSION['Customer_Type']==2){
    $FlightInstance = new FlightInstance();
    $db = new Db();
    $cd1 = new Class_Details();
    $cd2 = new Class_Details();
    $cd3 = new Class_Details();
    $cd4 = new Class_Details();
    $fl = new Flight();
    $FlightInstance->setFlight($fl);
    $aap = new Airport();
    $dap = new Airport();
    $airplane = new Airplane();
    $airplane->setCd1($cd1);
    $airplane->setCd2($cd2);
    $airplane->setCd3($cd3);
    $airplane->setCd4($cd4);
    $FlightInstance->setAirplane($airplane);
    $FlightInstance->setFlightInstanceFromDB($db, $get, $aap, $dap);
    $FlightInstance->setLegid($get);
    $ticket->add_ticket($FlightInstance,$db);
    if(isset($_GET['id_resv'])&&$_SESSION['manager_type']==1)
    {
       if($customer->reservation($db, $ticket, $payment,$_GET['id_resv']))
       {
          echo "<script type='text/javascript'>alert('book filght is Success');</script>";
          echo"<meta http-equiv='Refresh' content='0;URL=AdminPanel.php' />";
       }
    }
    else 
    {
        if($customer->reservation($db, $ticket, $payment,$_SESSION['id']))
        {
            echo "<script type='text/javascript'>alert('book filght is Success');</script>";
            echo"<meta http-equiv='Refresh' content='0;URL=ShowTicketsPassengerActive.php' />";
        }
    }
   }
  else {
      echo "<script type='text/javascript'>alert('error check Payment Data');</script>";
  }
    
}
//$payment=new payment();
?>

<div class="container">
        <form action="" method="post" >
 <table>
 <?php 
 if (@$_SESSION['Customer_Type']==2 ||(isset($_GET['id_resv'])&&$_SESSION['manager_type']==1&&@$_SESSION['id_resv_tele']==2)) {
?>
<h1>are you suer to book this ticket ?</h1>
<?php

 }
 else
 {
 ?>

 <tr>
        <td class="col-md-3">Class</td>
          <td>  <div class="col-md-5"><select name="class" width="300" style="width: 100%">
          <option value="1">VIP</option>
          <option value="2">First Class</option>
         <option value="3">Second Class</option>
             <option value="4">Economy</option>
          </select>
              </div>

</td>
</tr>


 <tr>
        <td class="col-md-3">Payment method</td>
         <td> 
          <div class="col-md-5">
          <select onchange="showUser(this.value)" name="method" width="300" style="width: 100%">
          <option  value="0">Payment method</option>
          <?php 
           $query=$payment_main->showpaymentMethod($db);
            while ($row=mysqli_fetch_array($query))
            {
          ?>
          <option value="<?php echo $row['id_payment']; ?>"> <?php echo $row['payment']; ?></option>
         <?php 
            }
            ?>
</select>
              </div>
</td>
</tr>
<tr>
                <td class="col-md-3">method</td>
                <td><div class="input-group input " id="txtHint">
                
            </div></td>
            
            </tr>

  <?php 
 }
 ?>
            <tr>
                <td class="col-md-3"></td>
                <td><div class="input-group input " id="txtHint"> </div>
                <input type="submit" name="submit" value="book now" />
                </td>
            
            </tr>

          </table>
        </form>
        </div>
        
        <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else  { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","typepayment.php?q="+str,true);
        xmlhttp.send();
    }
    
}


</script>