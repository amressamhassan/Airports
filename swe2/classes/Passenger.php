
<?php require_once('Person.php');?>
<?php require_once('customer.php');?>
<?php

class Passenger  extends Customer {
public function add($db,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country){
		/*if( $this->setCompany($nameCompany)
		    &&$this->setLogo($image)
		    &&$this->setType($typr))*/
		
		$db->insert('person','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone',$phone,'Telephone',$TelePhone,'Gender',$gender,'password',$passWord,'Street_name',$streetName,'Country',$country,'City',$city);
		$last_id = $db->get_last_id();
		if ($db->insert('customer','id_person',$last_id,'Customer_Type',1))
		{
		return true;}
	else return false;
}
//	echo $a->myfunc($at ,$aid,$afd,'person','id',13) ;
public function show($a){
			$at  = array('Person','customer'); 
 			$aid = array('User_ID','id_person');  
			$afd = array('User_ID','id_person');
			
			return $a->myfunc($at ,$aid,$afd,'customer','Customer_Type','1') ;
}
public function update($db,$id,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country){
		
		$db->Update('person',$id,'User_ID','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone'
			,$phone,'Telephone',$TelePhone,'Gender',$gender,'password',$passWord
			,'Street_name',$streetName,'Country',$country,'City',$city);
	//	$db->Update('customer',$id,'id_person');
			return true;
	
	}

	public function delete($db,$id){
		
		$db->Delete('Person','User_ID',$id);
		$db->Delete('customer','id_person',$id);
		return true;
	}

}


?>