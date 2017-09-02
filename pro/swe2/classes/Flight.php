<?php
class Flight {
    private $arriveAirport = null;
    private $departAirport = null;
    private $flightid=null;
    private $schDuration = null;
    private $fare = null;
    function __construct(){
        $arriveAirport=new Airport();
        $departAirport=new Airport();
        
    }
    function getArriveAirport() {
        return $this->arriveAirport;
    }

    function getDepartAirport() {
        return $this->departAirport;
    }

    function getFlightid() {
        return $this->flightid;
    }

    function getSchDuration() {
        return $this->schDuration;
    }

    function getFare() {
        return $this->fare;
    }

    function setArriveAirport($arriveAirport) {
        $this->arriveAirport = $arriveAirport;
        return $this;
    }

    function setDepartAirport($departAirport) {
        $this->departAirport = $departAirport;
        return $this;
    }

    function setFlightid($flightid) {
        $this->flightid = $flightid;
        return $this;
    }

    function setSchDuration($schDuration) {
        $this->schDuration = $schDuration;
        return $this;
    }

    function setFare($fare) {
        $this->fare = $fare;
        return $this;
    }

    function showAirportsSelect(Airport &$ar,Db &$db,$ArriveorDepart=0){
        $id=0;
        $airport="";
        $country="";
        $airportarray=$ar->getAirportIdCountryList($db);
        for ($key=0;$key<count($airportarray);$key++) {
            if($key%3 == 0){
                
               $id=$airportarray[$key]; 
               
            }
            if($key%3 == 1){
                $airport=$airportarray[$key];
            }
            if($key%3 == 2){
                $country=$airportarray[$key];
                
                if($ArriveorDepart==0){
                echo '<option value="'.$id.'" >'.$airport.' | '.$country.'
                        </option>';
                }else{
                    if(($ArriveorDepart==1&&$this->arriveAirport->getId()==$id)||($ArriveorDepart==2&&$this->departAirport->getId()==$id)){
                    
                    echo '<option  value="'.$id.'" selected="">'.$airport.' | '.$country.'
                    </option>';}
                    else{ echo '<option value="'.$id.'">'.$airport.' | '.$country.'
                        </option>';}
                    }
                }
            }
        }
    
    function addFlight(Db &$db){
        $db->insert("flight","Sch_duration",$this->schDuration,"fare",$this->fare,"id_airport_depart",$this->departAirport->getId(),"id_airport_arrive",$this->arriveAirport->getId());

        return true;
    }
    function showFlights(Db &$db,  Airport &$ap1,Airport &$ap2){
            $this->departAirport=$ap1;
            $this->arriveAirport=$ap2;
            $sql2=$db->selectOneTable1('flight');
            while($row=mysqli_fetch_assoc($sql2)) {
                $this->departAirport->setAirportFromDB($db,$row["id_airport_depart"]);
                $this->arriveAirport->setAirportFromDB($db,$row["id_airport_arrive"]);
            echo'<tr>
                            <td>'.$row["flight_id"].'</td>
                            <td>'.$this->departAirport->getName().' | '.$this->departAirport->getCountry().'</td>
                            <td>'.$this->arriveAirport->getName().' | '.$this->arriveAirport->getCountry().'</td>
                            <td>'.$row["fare"].'</td>
                            <td>'.$row["Sch_duration"].'</td>
                            <td><a class="btn btn-warning" href="FlightDelete.php?id='.$row["flight_id"].'">Delete</a><a class="btn btn-info" href="UpdateFlight.php?id='.$row["flight_id"].'">Update</a></td>
                          </tr>';
             
         }return true;
         }
    function deleteFlight(Db &$db,$id){
        $db->Delete("flight", "flight_id", $id);
    }
    function setFlightFromDB(Db &$db,$id,Airport &$ap1,  Airport &$ap2){
           
           $sql2=$db->selectOneTable('flight','flight_id',$id);
           while($row=mysqli_fetch_assoc($sql2)) {
           $this->flightid= $row["flight_id"];
           $this->schDuration= $row["Sch_duration"];
           $this->fare= $row["fare"];
           $this->arriveAirport= $ap1->setAirportFromDB($db, $row["id_airport_arrive"]);
           $this->departAirport= $ap2->setAirportFromDB($db, $row["id_airport_depart"]);
         }return $this;
    }
    function updateFlight(Db &$db){
        $db->Update("flight","flight_id",$this->flightid,"id_airport_depart",$this->departAirport->getId(),"id_airport_arrive",$this->arriveAirport->getId(),"fare",$this->fare,"Sch_duration",$this->schDuration);
        return true;
        
    }
    function getFlightList(Db &$db,Airport &$aap,Airport &$dap){
            $counter=0;
            $arr= array();
            $sql2=$db->selectOneTable1('flight');
            $this->departAirport=$dap;
            $this->arriveAirport=$aap;
            while($row=mysqli_fetch_assoc($sql2)) {
            
                           $this->departAirport->setAirportFromDB($db,$row["id_airport_depart"]);
                           $this->arriveAirport->setAirportFromDB($db,$row["id_airport_arrive"]);
                           $arr[$counter]= $row["flight_id"];
                           $arr[$counter+1]=$this->departAirport->getName()." (".$this->departAirport->getCountry().")";
                           $arr[$counter+2]=$this->arriveAirport->getName()." (".$this->arriveAirport->getCountry().")";
                           $arr[$counter+3]= $row["fare"];
                           $arr[$counter+4]= $row["Sch_duration"];
                          
             $counter+=5;
         }return $arr;
         }
}
