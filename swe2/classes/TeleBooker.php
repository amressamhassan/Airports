<?php require_once('Person.php');?>
<?php require_once('database.php');?>
<?php require_once('internalemployee.php');?>
<?php
//$aa->insert('person','User_ID','7','Fname
class TeleBooker  extends InternalEmployee{	
	public function setBno($name){
		if(is_numeric($name)){
			return true;
		}else{
			return false;
		}
	}
public function add($db,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country,$wages,$bookingNumber){
	if($this->setBno($bookingNumber)){
	$db->insert('person','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone',$phone,'Telephone',$TelePhone,'Gender',$gender,'password',$passWord,'Street_name',$streetName,'Country',$country,'City',$city);
	$last_id = $db->get_last_id();
	$db->insert('telebooker','Bno',$bookingNumber,'wages',$wages,'id_person',$last_id);
	return true;
}else return false;

	
}
public function show($db){
	
	$db->select('person','User_ID','telebooker','id_person');
	$sql2=$db->query();
	return $sql2;

}
//$aa->Update('person','6','User_ID','Fname','ahmed');
public function Update($db,$id,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country,$wages,$bookingNumber){
		$db->Update('person',$id,'User_ID','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone',$phone,'Telephone',$TelePhone,'Gender',$gender,'password',$passWord,'Street_name',$streetName,'Country',$country,'City',$city);
	$db->Update('telebooker',$id,'id_person','Bno',$bookingNumber,'wages',$wages);
	return true;
}
public function delete($id,$db){
	
	$db->Delete('person','User_ID',$id);
	$db->Delete('telebooker','id_person',$id);
	//$aa->Delete('manager_type','id','2');
	return true;
}
	public function show_profile(Db $db){
	    $at  = array('person','telebooker');
	    $aid = array('User_ID','id_person');
	    $afd = array('User_ID');
	    return $db->myfunc($at, $aid, $afd, 'telebooker', 'id', $_SESSION['id']);
	}
}

?>