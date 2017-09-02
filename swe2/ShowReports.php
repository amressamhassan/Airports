<?php
require_once 'include/header.php';
require_once 'classes/Reports.php';
$reports= new Reports();
$customer=new Customer();
$db = new Db()?>
<div>
    <div class="col-md-12">
        <img src="Graph.php" >
    </div>
    <div class="col-md-3">
        <img src="PieChart.php" style=" width: 340px ; height: 300px">
    </div>
    <div class="col-md-9">
        <img src="BarChart.php" style="margin-left: 50px; ">
    </div>
    <div class="col-md-3" >
        <table class="table table-bordered" style="color:black;font-size: 15px;background-color: white;border-style: double;border-color:gray;width: 340px;height:400px" >
            <tr>
                <td colspan="2" style="text-align:center;font-size: 18px"> Other Statistics</td>
            </tr>
            <tr>
                <td>Top Reserving Customer</td>
                <td><?php echo $reports->topCustomer($db,$customer);?></td>
            </tr>
            <tr>
                <td>Highest Country Revenue</td>
                <td><?php 
                $arr=$reports->topCountryRevenue($db);
                echo $arr[0]." <br> (".$arr[1]."$)";
                ?></td>
            </tr>
            <tr>
                <td>Total Registered Airplanes</td>
                <td><?php echo $reports->totalAirplanes($db); ?></td>
            </tr>
            <tr>
                <td>Total Registered Airports</td>
                <td><?php echo $reports->totalAirports($db); ?></td>
            </tr>
            <tr>
                <td>Total Registered Flight Instances</td>
                <td><?php echo $reports->totalFlightInstances($db); ?></td>
            </tr>
            <tr>
                <td>Total Registered Flights</td>
                <td><?php echo $reports->totalFlights($db); ?></td>
            </tr>
            <tr>
                <td>Total Reserved Tickets</td>
                <td><?php echo $reports->totalTickets($db); ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-8">
        <img src="HorizontalChart.php" style="margin-bottom: 30px;margin-left: 50px; ">
    </div>
</div> 