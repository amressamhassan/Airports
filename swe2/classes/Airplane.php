<?php

class Airplane{
    private $id = null;
    private $cd1;
    private $cd2;
    private $cd3;
    private $cd4;
    function __construct($id=0,$cd1=null,$cd2=null,$cd3=null,$cd4=null) {
        $this->id = $id;
        $this->cd1 = $cd1;
        $this->cd2 = $cd2;
        $this->cd3 = $cd3;
        $this->cd4 = $cd4;
    }
    function getId() {
        return $this->id;
    }

    function getCd1() {
        return $this->cd1;
    }

    function getCd2() {
        return $this->cd2;
    }

    function getCd3() {
        return $this->cd3;
    }

    function getCd4() {
        return $this->cd4;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setCd1($cd1) {
        $this->cd1 = $cd1;
        return $this;
    }

    function setCd2($cd2) {
        $this->cd2 = $cd2;
        return $this;
    }

    function setCd3($cd3) {
        $this->cd3 = $cd3;
        return $this;
    }

    function setCd4($cd4) {
        $this->cd4 = $cd4;
        return $this;
    }
    function addAirplane(Db &$db){
             $db->insert("airplane","Airplane_ID",$this->id);
             $this->cd1->addClassDetails($db);
             $this->cd2->addClassDetails($db);
             $this->cd3->addClassDetails($db);
             $this->cd4->addClassDetails($db);
             return true;
         }
    function showAirplanes(Db &$db){
            $at  = array('airplane','class_details'); 
            $aid = array('Airplane_ID','id_Airplane');  
            $afd = array('Airplane_ID','id_Airplane');
            $sql2=$db->myfunc($at ,$aid,$afd,'airplane','Airplane_ID',0) ;
            $cd1id=null;
            $cd1name=null;
            $cd1seats=null;
            $cd2id=null;
            $cd2name=null;
            $cd2seats=null;
            $cd3id=null;
            $cd3name=null;
            $cd3seats=null;
            $cd4id=null;
            $cd4name=null;
            $cd4seats=null;
            $counter=0;
            while($row=mysqli_fetch_assoc($sql2)) {
            if($counter==0){$cd1id=$row['id'];
                            $cd1name=$row['Class_Name'];
                            $cd1seats=$row['Seats'];
                            
            }
            if($counter==1){$cd2id=$row['id'];
                            $cd2name=$row['Class_Name'];
                            $cd2seats=$row['Seats'];}
            if($counter==2){$cd3id=$row['id'];
                            $cd3name=$row['Class_Name'];
                            $cd3seats=$row['Seats'];}
            if($counter==3){$cd4id=$row['id'];
                            $cd4name=$row['Class_Name'];
                            $cd4seats=$row['Seats'];
                            $airplaneid=$row['Airplane_ID'];
                echo'<tr>
                            <td>'.$airplaneid.'</td>
                            <td>'.$cd1name.'</td>
                            <td>'.$cd1seats.'</td>
                            <td>'.$cd2name.'</td>
                            <td>'.$cd2seats.'</td>
                            <td>'.$cd3name.'</td>
                            <td>'.$cd3seats.'</td>
                            <td>'.$cd4name.'</td>
                            <td>'.$cd4seats.'</td>
                            <td><a class="btn btn-warning" href="AirplaneDelete.php?id='.$airplaneid.'">Delete</a><a class="btn btn-info" href="UpdateAirplane.php?id='.$airplaneid.'">Update</a></td>
            </tr>';
                
            $counter=-1;
            }
             $counter++;
         }
             return true;
         }
    
    function deleteAirplane(Db& $db,$id){
        $db->Delete("airplane", "Airplane_ID",$id );
    }
    function setAirplaneFromDB(Db &$db,$id){
            $this->id=$id;
            $counter=0;
            $at  = array('airplane','class_details'); 
            $aid = array('Airplane_ID','id_Airplane');  
            $afd = array('Airplane_ID','id_Airplane');
            $sql2=$db->myfunc($at ,$aid,$afd,'airplane','Airplane_ID',$id) ;
            while($row=mysqli_fetch_array($sql2)) {
                if($counter==0){
                    $this->cd1->setSeats($row['Seats']);
                    $this->cd1->setClass_name($row['Class_Name']);            
                    $this->cd1->setId_airplane($id);
                    $this->cd1->setId($row['id']);
                }
                if($counter==1){
                    $this->cd2->setSeats($row['Seats']);
                    $this->cd2->setClass_name($row['Class_Name']);            
                    $this->cd2->setId_airplane($id);
                    $this->cd2->setId($row['id']);
                }
                if($counter==2){
                    $this->cd3->setSeats($row['Seats']);
                    $this->cd3->setClass_name($row['Class_Name']);            
                    $this->cd3->setId_airplane($id);
                    $this->cd3->setId($row['id']);
                }
                if($counter==3){
                    $this->cd4->setSeats($row['Seats']);
                    $this->cd4->setClass_name($row['Class_Name']);            
                    $this->cd4->setId_airplane($id);
                    $this->cd4->setId($row['id']);
                }
                $counter++;
         }return true;
         } 

    function updateAirplane(Db &$db){
         $this->cd1->updateClassDetails($db);
         $this->cd2->updateClassDetails($db);
         $this->cd3->updateClassDetails($db);
         $this->cd4->updateClassDetails($db);
         return true;
        
    }
    
    function getAirplanesList(Db &$db){
        $counter=0;
        $arr= array();
        $cul = array('id_Airplane');
        $sql2=$db->GROUP($cul,'sum' ,'Seats','seats','class_details','id_Airplane') ;
        
         while($row=mysqli_fetch_assoc($sql2)) {
             $arr[$counter]= $row["id_Airplane"];
             $arr[$counter+1]= $row["Seats"];
             $counter+=2;
         }return $arr;
    }
    
    function checkAirplaneID(Db &$db,$id){
         $sql2=$db->selectOneTable("Airplane", "Airplane_ID", $id);
//         var_dump($sql2);
         if($sql2==false){return false;}
         if( mysqli_num_rows ($sql2)==null){return false;}
         else{return true;}
    }
}
?>

