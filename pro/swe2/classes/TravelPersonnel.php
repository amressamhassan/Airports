<?php require_once('Person.php');?>
<?php require_once('TeleBooker.php');?>
<?php require_once('database.php');?>
<?php require_once('customer.php');?>
<?php
class TravelPersonnel extends Customer{
	public function add($db,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country,$image,$type,$nameCompany){
		if( $this->setCompany($nameCompany)&&$this->setLogo($image)&&$this->setType($typr)){
		$db->insert('person','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone',$phone,'Telephone',$TelePhone,'Gender',$gender,'password',$passWord,'Street_name',$streetName,'Country',$country,'City',$city);
		$last_id = $db->get_last_id();
		$db->insert('customer','Type',$type,'Logo',$image,'Name_company',$nameCompany,'id_person',$last_id,'Customer_Type',2);
			return true;
	}else return false;
	}
	public function show($a){
			//$db=new Db();
			//$db->select('person','User_ID','customer','Customer_ID');
			//$sql2=$db->query();
			//return $sql2;
			$at  = array('Person','customer',); 
 			$aid = array('User_ID','id_person');  
			 $afd = array('User_ID','id_person');
				$a=new Db;
				return $a->myfunc($at ,$aid,$afd,'customer','Customer_Type','2') ;
	}
	public function update($db,$id,$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$streetName,$city,$country,$image,$type,$namecompany){
		$db->Update('person',$id,'User_ID','Fname',$fName,'Mname',$mName,'Lname',$lName,'Email',$email,'Phone',$phone,'Telephone',$TelePhone,'Gender',$gender
			,'password',$passWord,'Street_name',$streetName,'Country',$country,'City',$city);
		
			$db->Update('customer',$id,'id_person','Type',$type,'Logo',$image,'Name_company',$namecompany);
			
		

	}
	//Delete($table,$column,$id)
	public function delete($db,$id){
		$db= new Db();
		$db->Delete('Person','User_ID',$id);
		$db->Delete('customer','id_person',$id);
	}
}	
?>	