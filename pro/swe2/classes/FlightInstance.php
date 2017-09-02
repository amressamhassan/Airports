<?php
/**
 *
 * @author amr
 *
 */
require_once('ticket.php');
require_once 'database.php';

interface Flight_subject {

    public function registerObserver(ticket_Observer $ticket, Db $db);

    public function removeObserver(ticket_Observer $ticket, $Ticket_ID);

    public function notify(Db $db, $id_mse, ticket_Observer $ticket);
}

class FlightInstance implements Flight_subject {

    private $mesg;
    private $departdate;
    private $departtime;
    private $arrivedate;
    private $arrivetime;
    private $flight;
    private $legid;
    private $airplane;
    private $seats;
    private $tickets;

    function getDepartdate() {
        return $this->departdate;
    }

    function getDeparttime() {
        return $this->departtime;
    }

    function getArrivedate() {
        return $this->arrivedate;
    }

    function getArrivetime() {
        return $this->arrivetime;
    }

    function getFlight() {
        return $this->flight;
    }

    function getLegid() {
        return $this->legid;
    }

    function getAirplane() {
        return $this->airplane;
    }

    function getSeats() {
        return $this->seats;
    }

    function setDepartdate($departdate) {
        $this->departdate = $departdate;
        return $this;
    }

    function setDeparttime($departtime) {
        $this->departtime = $departtime;
        return $this;
    }

    function setArrivedate($arrivedate) {
        $this->arrivedate = $arrivedate;
        return $this;
    }

    function setArrivetime($arrivetime) {
        $this->arrivetime = $arrivetime;
        return $this;
    }

    function setFlight($flight) {
        $this->flight = $flight;
        return $this;
    }

    function setLegid($legid) {
        $this->legid = $legid;
        return $this;
    }

    function setAirplane($airplane) {
        $this->airplane = $airplane;
        return $this;
    }

    function setSeats($seats) {
        $this->seats = $seats;
        return $this;
    }

    function formatDate($date) {
        $array = array();
        list($month, $day, $year) = preg_split('[/]', $date);
        $array['Year'] = $year;
        $array['Month'] = $month;
        $array['Day'] = $day;
        return $array;
    }

    function calcDateTime($duration, $hours, $days, $months, $years) {

        $datearray = array();
        $date = date_create_from_format("Y-m-d-G", $years . "-" . $months . "-" . $days . "-" . $hours);
        date_add($date, date_interval_create_from_date_string($duration . ' hours'));
        $datearray['Year'] = $date->format('Y');
        $datearray['Month'] = $date->format('m');
        $datearray['Days'] = $date->format('d');
        $datearray['Hours'] = $date->format('G');
        return $datearray;
    }

    function showFlightsSelect(Flight &$fl, Db &$db, Airport &$aap, Airport &$dap, $updcheck = 0) {
        $id = 0;
        $from = "";
        $to = "";
        $fare = "";
        $dur = "";
        $flightarray = $fl->getFlightList($db, $aap, $dap);
        for ($key = 0; $key < count($flightarray); $key++) {
            if ($key % 5 == 0) {
                $id = $flightarray[$key];
            }
            if ($key % 5 == 1) {
                $from = $flightarray[$key];
            }
            if ($key % 5 == 2) {
                $to = $flightarray[$key];
            }
            if ($key % 5 == 3) {
                $fare = $flightarray[$key];
            }
            if ($key % 5 == 4) {
                $dur = $flightarray[$key];

                if ($updcheck == 0) {
                    echo '<option value="' . $id . '" >' . $from . ' to  ' . $to . ' | ' . $fare . '$ | ' . $dur . ' Hours
                        </option>';
                } else {
                    if ($this->flight->getFlightid() == $id) {

                        echo '<option value="' . $id . '" selected="">' . $from . ' to  ' . $to . ' | ' . $fare . '$ | ' . $dur . ' Hours
                        </option>';
                    } else {
                        echo '<option value="' . $id . '" >' . $from . ' to  ' . $to . ' | ' . $fare . '$ | ' . $dur . ' Hours
                        </option>';
                    }
                }
            }
        }
    }

    function showTimeSelectForDepartUpdate() {
        $time = $this->departtime;
        ?>

        <?php for ($i = 0; $i < 24; $i++): ?>
            <option value="<?= $i; ?>"  <?php if ($i == $time) {
                echo 'selected=""';
            } ?>  ><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
        <?php endfor ?>

        <?php
    }

    function showAirplanesSelect(Db &$db, Airplane &$ap, $updcheck = 0) {
        $id = 0;
        $seats = 0;
        $airplanearray = $ap->getAirplanesList($db);
        for ($key = 0; $key < count($airplanearray); $key++) {
            if ($key % 2 == 0) {
                $id = $airplanearray[$key];
            }
            if ($key % 2 == 1) {
                $seats = $airplanearray[$key];
                if ($updcheck == 0) {
                    echo '<option value="' . $id . '/' . $seats . '" >' . $id . ' (  ' . $seats . ' Seats )
                        </option>';
                } else {
                    if ($this->airplane->getId() == $id) {
                        echo '<option value="' . $id . '/' . $seats . '" selected="">' . $id . ' (  ' . $seats . ' Seats )
                        </option>';
                    } else {
                        echo '<option value="' . $id . '/' . $seats . '" >' . $id . ' (  ' . $seats . ' Seats )
                        </option>';
                    }
                }
            }
        }
    }

    function addFlightInstance(Db &$db) {
        $db->insert("flight_instance", "Date_arr", $this->getArrivedate(), "Arr_time", $this->getArrivetime(), "Date_depart", $this->getDepartdate(), "Depart_time", $this->getDeparttime(), "id_leg_flight", $this->getFlight()->getFlightid(), "id_Airplane", $this->getAirplane()->getId());
        ;
        return true;
    }

    function showFlights(Db &$db, $choice = 0) {
        //choice = 0 means all flights for manager
        //choice = 1 means only active flights for manager
        //choice = 2 means book page only
        //choice = 3 means telebooker active
        //choice = 4 means telebooker only
        //choice = 5 means main page
        $sql2 = $db->flight_instance_tailored_function();
        while ($row = mysqli_fetch_assoc($sql2)) {
            if ($choice == 1 || $choice == 2 || $choice == 3) {
                $todayyear = date("Y");
                $todaymonth = date("m");
                $todayday = date("d");

                $arrdate = $this->formatDate($row["Date_arr"]);
//                echo "Year".$arrdate['Year'] .":".$todayyear."<br>";
//                    echo "Month".$arrdate['Month'] .":".$todaymonth."<br>";
//                    echo "Day".$arrdate['Day'] .":".$todayday."<br>";
                if ($arrdate['Year'] >= $todayyear && $arrdate['Month'] >= $todaymonth) {
                    if ($arrdate['Day'] < $todayday) {

                        continue;
                    }
                }
                if ($arrdate['Year'] < $todayyear || ($arrdate['Year'] <= $todayyear && $arrdate['Month'] < $todaymonth)) {

                    continue;
                }
            }
            $sql=$db->tailoredtemp9($row["iid"]);
            $row2=mysqli_fetch_assoc($sql);
            echo'<tr>
                            <td>' . $row["iid"] . '</td>
                            <td>' . $row["aan"] . ' (' . $row["aac"] . ')</td>
                            <td>' . $row["Date_depart"] . '</td>
                            <td>' . $row["Depart_time"] . ':00</td>
                            <td>' . $row["adn"] . ' (' . $row["adc"] . ')</td>
                            <td>' . $row["Date_arr"] . '</td>
                            <td>' . $row["Arr_time"] . ':00</td>
                            <td>' . $row["Airplane_ID"] . '</td>
                            <td>' . $row["Seat"] . '</td>
                            <td>' . $row["fare"] . '$</td>
                            <td>' . ($row["Seat"]-$row2["c"]) . '</td>
                            ';
            if ($choice == 2) 
            {
                if(isset($_GET['id_resv'])&&$_SESSION['manager_type']==1)
                {
                echo '<td><a class="btn btn-primary" href="BookTicket.php?id=' . $row["iid"] . '&choice=' . $choice .'&id_resv='.$_GET['id_resv'].'">Book</a></td>';
                }
                else
                {
                    echo '<td><a class="btn btn-primary" href="BookTicket.php?id=' . $row["iid"] . '&choice=' . $choice . '">Book</a></td>';
                    
                }
                
            } else {
                if ($choice == 3 || $choice == 4 || $choice == 5) {
                    
                } else {
                    echo '<td><a class="btn btn-warning" href="FlightInstanceDelete.php?id=' . $row["iid"] . '&choice=' . $choice . '">Delete</a><a class="btn btn-info" href="UpdateFlightInstance.php?id=' . $row["iid"] . '&choice=' . $choice . '">Update</a></td>
            </tr>';
                }
            }
        }return true;
    }

    function setFlightInstanceFromDB(Db &$db, $id, Airport &$aap, Airport &$dap) {
        $this->legid = $id;
        $sql2 = $db->flight_instance_tailored_function_with_ID($id);
        while ($row = mysqli_fetch_assoc($sql2)) {

            $this->arrivedate = $row['Date_arr'];
            $this->arrivetime = $row["Arr_time"];
            $this->departdate = $row["Date_depart"];
            $this->departtime = $row["Depart_time"];
            $this->airplane->setAirplaneFromDB($db, $row['Airplane_ID']);
            $this->flight->setFlightFromDB($db, $row['id_leg_flight'], $aap, $dap);
            $this->seats = $row['Seat'];
        }
    }

    function updateFlightInstance($db) {
        $db->Update("flight_instance", "iid", $this->legid, "Date_depart", $this->departdate, "Depart_time", $this->departtime, "Date_arr", $this->arrivedate, "Arr_time", $this->arrivetime, "id_leg_flight", $this->flight->getFlightid(), "id_Airplane", $this->airplane->getId());
        return true;
    }

    function deleteFlightInstance(Db &$db, $id) {
        $db->Delete("flight_instance", "iid", $id);
        return true;
    }

    /**
     *
     * @author amr
     *
     */
    public function registerObserver(ticket_Observer $ticket, Db $db) {

        $ticket->set_id_fight($this->getLegid());

        if (@$_POST['class'] == 1) {
            $ticket->set_class($this->getAirplane()->getCd1()->getId());
            $ticket->set_Seat_no($this->get_Seat_no($db, $this->getAirplane()->getCd1()->getId()));
        }
        else if (@$_POST['class'] == 2) {
            $ticket->set_class($this->getAirplane()->getCd2()->getId());
            $ticket->set_Seat_no($this->get_Seat_no($db, $this->getAirplane()->getCd2()->getId()));
        }
       else  if (@$_POST['class'] == 3) {
            $ticket->set_class($this->getAirplane()->getCd3()->getId());
            $ticket->set_Seat_no($this->get_Seat_no($db, $this->getAirplane()->getCd3()->getId()));
        }
       else  if (@$_POST['class'] == 4) {
            $ticket->set_class($this->getAirplane()->getCd4()->getId());
            $ticket->set_Seat_no($this->get_Seat_no($db, $this->getAirplane()->getCd4()->getId()));
        }
        else {
            $ticket->set_class($this->getAirplane()->getCd1()->getId());
            $ticket->set_Seat_no($this->get_Seat_no($db, $this->getAirplane()->getCd1()->getId()));
        }   
    }

    function get_Seat_no(Db $db, $id2) {
        $id;
        $idd;
        if ($row = mysqli_fetch_array($db->selectOneTable('class_details', 'id', $id2))) {
            $id = $row['seat_re'];
            $idd = $row['seat_av'];
        }
        $idd--;
        $id++;
        $db->Update('class_details', $id2, 'id', 'seat_av', $idd, 'seat_re', $id);
        return $id;
    }

    public function removeObserver(ticket_Observer $ticket, $Ticket_ID) {
        $ticket->set_Ticket_ID($Ticket_ID);
        return true;
    }

    public function notify(Db $db, $id_mse, ticket_Observer $ticket) {

        $at = array('flight_instance', 'ticket', 'class_details');
        $aid = array('iid', 'id_fight', 'id');
        $afd = array('iid', 'class');
        $result = $db->myfunc($at, $aid, $afd, 'flight_instance', 'iid', $this->getLegid());
        $this->tickets[] = $ticket;
        $i = 0;

        while ($row = mysqli_fetch_array($result)) {

            $this->tickets[$i] = $ticket;
            $this->tickets[$i]->update($db, $row, $id_mse);
            $i++;
        }

        //$arr=mysqli_fetch_array($result);      
        //   for ($i=0;$i<c)
    }

}


//$f->notify(12, $fd, 1, $ft);



