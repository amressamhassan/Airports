<?php

require_once'include/phplot.php';
require_once 'classes/database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reports
 *
 * @author Ahmed
 */
class Reports {

    function showRevenueGraph($db) {

        $months = array();

        for ($i = 1; $i < 13; $i++) {
            if ($i >= 10) {
                $months[$i - 1] = "" . $i . "";
            } else {
                $months[$i - 1] = "0" . $i . "";
            }
        }
//var_dump($months);
        $results = array();
        for ($i = 0; $i < 12; $i++) {

            $sql = $db->tailoredtemp2($months[$i]);
            while ($row = mysqli_fetch_assoc($sql)) {
                if ($row['flightsum'] == null) {
                    $results[$i] = 0;
                } else {
                    $results[$i] = $row['flightsum'];
                }
            }
        }
//var_dump($results);
        $data = array(
            array('Jan', 0, $results[0]), array('Feb', 1, $results[1]), array('Mar', 2, $results[2]),
            array('Apr', 3, $results[3]), array('May', 4, $results[4]), array('Jun', 5, $results[5]),
            array('Jul', 6, $results[6]), array('Aug', 7, $results[7]), array('Sep', 8, $results[8]),
            array('Oct', 9, $results[9]), array('Nov', 10, $results[10]), array('Dec', 11, $results[11]),
        );

        $plot = new PHPlot(1140, 400);
        $plot->SetImageBorderType('plain');

        $plot->SetPlotType('linepoints');
        $plot->SetDataType('data-data');
        $plot->SetDataValues($data);
        
        $plot->SetYDataLabelPos('plotin');
# Main plot title:
        $plot->SetTitle('Revenue this year : in dollars');

# Make sure Y axis starts at 0:
        $plot->SetPlotAreaWorld(NULL, 0, NULL, NULL);


        $plot->DrawGraph();
    }

    function showPieChartRatings($db) {

        $ratings = array();
//var_dump($months);
        $results = array();
        $i = 0;
        $sql = $db->tailoredtemp3();
        while ($row = mysqli_fetch_assoc($sql)) {
            if ($row['ratingcount'] == null) {
                $ratings[$i] = 0;
            } else {
                $ratings[$i] = $row['ratingcount'];
            } $i++;
        }

//var_dump($results);
        $data = array(
            array('1', $ratings[0]),
            array('2', $ratings[1]),
            array('3', $ratings[2]),
            array('4', $ratings[3]),
            array('5', $ratings[4]),
        );
//        $plot = new PHPlot(442, 390);
        $plot = new PHPlot(340, 300);
        $plot->SetImageBorderType('plain');
        $plot->SetDataType('text-data-single');
        $plot->SetDataValues($data);
        $plot->SetPlotType('pie');
        $plot->SetTitle('User Ratings Distribution');

        $colors = array(array(102, 0, 192), array(0, 191, 255), array(0, 255, 179), array(196, 241, 255), array(30, 120, 150));
        $ratingslegend = array('1', '2', '3', '4', '5');
        $plot->SetDataColors($colors);
        $plot->SetLegend($ratingslegend);
        $plot->SetShading(0);
        $plot->SetLabelScalePosition(0.2);

        $plot->DrawGraph();
    }

    function showVerticalBars($db ) {

        
        $airportscount = array();
        $countries = array();


        $i = 0;
        $sql = $db->tailoredtemp4();
        while ($row = mysqli_fetch_assoc($sql)) {
            $countries[$i] = $row['Country'];
            if ($row['flightsum'] == null) {
                $airportscount[$i] = 0;
            } else {
//                echo $row['Country'];
                $airportscount[$i] = $row['flightsum'];
            } $i++;
            if ($i > 5) {
                break;
            }
        }
            $data = array(
                array($countries[0], $airportscount[0]),
                array($countries[1], $airportscount[1]),
                array($countries[2], $airportscount[2]),
                array($countries[3], $airportscount[3]),
                array($countries[4], $airportscount[4]));
//        $data = array(
//  array('1985', 340),    array('1986', 682),    array('1987', 1231),
//  array('1988', 2069),   array('1989', 3509),   array('1990', 5283),
//  array('1991', 7557),   array('1992', 11033),  array('1993', 16009),
//  array('1994', 24134),  array('1995', 33768),  array('1996', 44043),
//  array('1997', 55312),  array('1998', 69209),  array('1999', 86047),
//  array('2000', 109478), array('2001', 128375), array('2002', 140767),
//);



        $plot = new PHPlot(796, 300);
        $plot->SetImageBorderType('plain');

        $plot->SetPlotType('bars');
        $plot->SetDataType('text-data');
        $plot->SetDataValues($data);

# Let's use a new color for these bars:
        $plot->SetDataColors('cyan');

# Force bottom to Y=0 and set reasonable tick interval:
        $plot->SetPlotAreaWorld(NULL, 0, NULL, NULL);
        $plot->SetYTickIncrement(1);
# Format the Y tick labels as numerics to get thousands separators:
        $plot->SetYLabelType('data');
        $plot->SetPrecisionY(0);

# Main plot title:
        $plot->SetTitle('Top 5 visited countries');
# Y Axis title:
        $plot->SetYTitle('No of tickets');

# Turn off X tick labels and ticks because they don't apply here:
        $plot->SetXTickLabelPos('none');
        $plot->SetXTickPos('none');

        $plot->DrawGraph();
    }
      function showHorizontalBars() {

        $db = new Db();
        $airplanescount = array();
        $airplanes = array();
        
         $sql = $db->tailoredtemp5();
         $i=0;
        while ($row = mysqli_fetch_assoc($sql)) {
            $airplanes[$i] = $row['Airplane_ID'];
            if ($row['flightsum'] == null) {
                $airplanescount[$i] = 0;
            } else {
//                echo $row['Country'];
                $airplanescount[$i] = $row['flightsum'];
            } $i++;
            if ($i > 5) {
                break;
            }
        }
            $data = array(
                array($airplanes[0], $airplanescount[0]),
                array($airplanes[1], $airplanescount[1]),
                array($airplanes[2], $airplanescount[2]),
                array($airplanes[3], $airplanescount[3]),
                array($airplanes[4], $airplanescount[4]));
        
        
        
$plot = new PHPlot(800, 400);
$plot->SetImageBorderType('plain'); // Improves presentation in the manual
$plot->SetTitle("Most used airplanes");
#  Force the X axis range to start at 0:
$plot->SetPlotAreaWorld(0);
#  No ticks along Y axis, just bar labels:
$plot->SetYTickPos('none');
#  No ticks along X axis:
$plot->SetXTickPos('none');
#  No X axis labels. The data values labels are sufficient.
$plot->SetXTickLabelPos('none');
#  Turn on the data value labels:
$plot->SetXDataLabelPos('plotin');
#  No grid lines are needed:
$plot->SetDrawXGrid(FALSE);
#  Set the bar fill color:
$plot->SetDataColors('purple');
#  Use less 3D shading on the bars:
$plot->SetShading(3);
$plot->SetDataValues($data);
$plot->SetDataType('text-data-yx');
$plot->SetPlotType('bars');
$plot->DrawGraph();


      }
      function topCustomer(Db &$db,  Customer &$customer){
          $sql= $db->tailoredtemp6();
          $row = mysqli_fetch_assoc($sql);
          return $customer->getCustomerNameById($db, $row['id_customer']);
          
      }
      
      function topCountryRevenue(Db &$db){
          $sql= $db->tailoredtemp7();
          $row = mysqli_fetch_assoc($sql);
          $arr[0]=$row['Country'];
          $arr[1]=$row['s'];
          return $arr;
          
      }
      function totalAirports(Db &$db){
          $sql= $db->tailoredtemp8("airport");
          $row = mysqli_fetch_assoc($sql);
          
          return $row['c'];
          
      }
      function totalAirplanes(Db &$db){
          $sql= $db->tailoredtemp8("airplane");
          $row = mysqli_fetch_assoc($sql);
          return $row['c'];
          
      }
      function totalFlightInstances(Db &$db){
          $sql= $db->tailoredtemp8("flight_instance");
          $row = mysqli_fetch_assoc($sql);
          return $row['c'];
          
      }
      function totalFlights(Db &$db){
          $sql= $db->tailoredtemp8("flight");
          $row = mysqli_fetch_assoc($sql);
          return $row['c'];
          
      }
      function totalTickets(Db &$db){
          $sql= $db->tailoredtemp8("ticket");
          $row = mysqli_fetch_assoc($sql);
          return $row['c'];
          
      }

}

?>