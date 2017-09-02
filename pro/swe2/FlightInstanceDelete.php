   <?php 
   require_once 'classes/Airplane.php';
   require_once 'classes/FlightInstance.php';
   require_once 'classes/Flight.php';
   require_once 'classes/Airport.php';
   require_once 'classes/Class_Details.php';
   require_once 'classes/database.php';
   $instance= new FlightInstance();
   $db = new Db();
$id;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
    $instance->deleteFlightInstance($db,$id);
    $t=new ticket();
    //$instance->notify(17, $db, 1, $t);
    $choice = $_GET['choice'];
    if($choice==0){
    header("Location: ShowFlightInstances.php");}
    if($choice==1){header("Location: ShowFlightInstancesActive.php");}
        die();
   

?>
