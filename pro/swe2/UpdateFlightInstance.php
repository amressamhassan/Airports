<?php
include 'include/header.php';
$instance = new FlightInstance();
$db = new Db();
$cd1 = new Class_Details();
$cd2 = new Class_Details();
$cd3 = new Class_Details();
$cd4 = new Class_Details();
$fl = new Flight();
$instance->setFlight($fl);
$db = new Db();
$aap = new Airport();
$dap = new Airport();
$airplane = new Airplane();
$airplane->setCd1($cd1);
$airplane->setCd2($cd2);
$airplane->setCd3($cd3);
$airplane->setCd4($cd4);
$instance->setAirplane($airplane);

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $instance->setFlightInstanceFromDB($db, $id, $aap, $dap);
}
?>

<div class="container">
    <form action="UpdateFlightInstance_Redirect.php" method="POST" >
        <input name="id" type="hidden" <?php echo 'value="'.$id.'"'; ?>>
        <?php $choice;
        if(isset($_GET['choice'])){
            $choice =$_GET['choice'];
        }
        
        if($choice=="0"){
        echo '<input name="choice" value="0" type="hidden">';
        }
        else {if($choice=="1"){echo '<input name="choice" value="1" type="hidden">';
        }}
        ?>
        <table class="table">
            <tr>
                <td class="col-md-1">Flight</td>
                <td>  <div class="col-md-7">
                        <select name="flightid" width="300" style="width: 100%">
                            <?php
                            $instance->showFlightsSelect($fl, $db, $aap, $dap, 1);
                            ?>

                        </select>
                    </div>
                </td>
            </tr>
            <td class="col-md-3">Depart Date</td>
            <td>  
                <div class="col-md-3">
                    <!--use value to put update info in this input-->
                    <input name="date" type="text" id="datepicker" <?php echo 'value="' . $instance->getDepartdate() . '"' ?>> </input>
                </div>
            </td>
            </tr>
            <tr>
                <td class="col-md-1">Depart Time</td>
                <td>  <div class="col-md-3"><select name="time" width="300" style="width: 100%">

<?php $instance->showTimeSelectForDepartUpdate(); ?>
                        </select>
                    </div>
                </td>
            </tr>  

            <tr>
                <td class="col-md-1">Airplane</td>
                <td>  <div class="col-md-3">
                        <select name="airplane" width="300" style="width: 100%">

                            <?php
                            $instance->showAirplanesSelect($db, $airplane, 1);
                            ?>
                        </select>
                    </div>
                </td>
            </tr>  
            <tr>
                <td><button class="btn btn-info" type="submit">Update</button></td>
            </tr>

        </table>           
    </form>  

</div>
