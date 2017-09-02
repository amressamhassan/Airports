<?php
class Airport  {
	private $id=null;	
	private $code=null;
        private $name=null;
        private $city=null;
        private $country=null;
	function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
            return $this;
        }

                 function getCode() {
             return $this->code;
         }

         function getName() {
             return $this->name;
         }

         function getCity() {
             return $this->city;
         }

         function getCountry() {
             return $this->country;
         }

         function setCode($code) {
             $this->code = $code;
             return $this;
         }

         function setName($name) {
             $this->name = $name;
             return $this;
         }

         function setCity($city) {
             $this->city = $city;
             return $this;
         }

         function setCountry($country) {
             $this->country = $country;
             return $this;
         }
         function addAirport(Db &$db){
             $db->insert("airport","code",$this->code,"name",$this->name,"city",$this->city,"country",$this->country);
             return true;
         }
         function setAirportFromDB(Db &$db,$id){
             $sql2=$db->selectOneTable('airport','id',$id);
            while($row=mysqli_fetch_assoc($sql2)) {
           $this->id= $row["id"];
           $this->code= $row["Code"];
           $this->name= $row["Name"];
           $this->city= $row["City"];
           $this->country= $row["Country"];
         }return $this;
         }
         function showAirports(Db &$db){
             
            $sql2=$db->selectOneTable1('airport');
            while($row=mysqli_fetch_assoc($sql2)) {
            echo'<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["Code"].'</td>
                            <td>'.$row["Name"].'</td>
                            <td>'.$row["City"].'</td>
                            <td>'.$row["Country"].'</td>
                            <td><a class="btn btn-warning" href="AirportDelete.php?id='.$row["id"].'">Delete</a><a class="btn btn-info" href="UpdateAirport.php?id='.$row["id"].'">Update</a></td>
                          </tr>';
             
         }return true;
         }
         function deleteAirport(Db &$db,$id){
            $db=new Db();
            $db->Delete('airport', 'id', $id);
             
             
         }
         function updateAirport(Db &$db){
             $db=new Db();
             $db->Update("airport","id",$this->id,"Code",$this->code,"Name",$this->name,"City",$this->city,"Country",$this->country);
             return true;
         }
         function getAirportIdCountryList(Db &$db){
            $counter=0;
            $arr= array();
            $sql2=$db->selectOneTable1('airport');
            while($row=mysqli_fetch_assoc($sql2)) {
            
                           $arr[$counter]= $row["id"];
                           $arr[$counter+1]= $row["Name"];
                           $arr[$counter+2]= $row["Country"];
                          
             $counter+=3;
         }return $arr;
         }
 }