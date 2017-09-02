<?php
class Class_Details{
    private $id=null;
    private $seats=null;
    private $class_name=null;
    private $id_airplane=null;
    
    function getId() {
        return $this->id;
    }

    function getSeats() {
        return $this->seats;
    }

    function getClass_name() {
        return $this->class_name;
    }

    function getId_airplane() {
        return $this->id_airplane;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setSeats($seats) {
        $this->seats = $seats;
        return $this;
    }

    function setClass_name($class_name) {
        $this->class_name = $class_name;
        return $this;
    }

    function setId_airplane($id_airplane) {
        $this->id_airplane = $id_airplane;
        return $this;
    }

    function addClassDetails(Db &$db){
             $db->insert("class_details","Seats",$this->seats,"Class_Name",$this->class_name,"id_Airplane",$this->id_airplane,"seat_re",0,"seat_av",$this->seats);
             
             return true;
         }
    function updateClassDetails(Db &$db){
         $db->Update("class_details","id",$this->id,"Seats",$this->seats,"Class_Name",$this->class_name);
    }
}


?>

