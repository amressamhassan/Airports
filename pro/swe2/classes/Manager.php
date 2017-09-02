<?php require_once('Person.php');?>
<?php require_once('TeleBooker.php');?>
<?php require_once('database.php');?>
<?php require_once('TravelPersonnel.php');?>
<?php require_once('Passenger.php');?>
<?php require_once('internalemployee.php');?>
<?php
//$fName,$mName,$lName,$email,$phone,$TelePhone,$gender,$passWord,$address,$streetName,$city,$country,$wages,$bookingNumber
class Manager extends InternalEmployee {
	public function addTeleBooker($telebooker,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$booking,$conpass)
	{
		//$pers=new Person();
		$db=new Db();
		if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)
			&&$this->setGender($gender)&&$this->setWages($wages)&&$this->setConPass($conpass)){
			$telebooker->add($db,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry(),$wages,$booking);
			//$telebooker=new TeleBooker();
			//$telebooker->add($db,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$booking);
			
			
			return true;
		}
		else
			{
			return false;
		
		}
	}
	public function showTelebooker($telebooker){
		$db=new Db();
		$sql=$telebooker->show($db);
		return $sql;
	}

	public function updateTelebooker($telebooker,$id,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$booking){
		if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)
			&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)
			){
			$db=new Db();
			$telebooker->Update($db,$id,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry(),$wages,$booking);
			return true;
			
		}
		else
			{
				return false;
		
		}
	}
	public function deleteTelebooker($telebooker,$id){
		$db=new Db();
		$telebooker->delete($id,$db);
	}
	public function addTravelPersonnel($travel,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$image,$type,$nameCompany,$conpass){

		if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)&&$this->setCompany($nameCompany)&&$this->setConPass($conpass)){
			$db=new Db();
			$travel->add($db,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry(),$image,$type,$nameCompany);
			return true;
		}
		else
			return false;
	}
	public function showTravelPersonnel($travel){
		//$travel=new TravelPersonnel();
		$db=new Db();
		$sql=$travel->show($db);
		return $sql;
		}
	public function updateTravelPersonnel($travel,$id,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$logo,$type,$company){

		if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)&&$this->setCompany($company)){
			$db=new Db();
			$travel->update($db,$id,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry(),$logo,$type,$company);
			return true;
		}
		else
			return false;
	}
	public function deleteTravelPersonnel($travel,$id){
		$db=new Db();
		$travel->delete($db,$id);
	}
	public function addPassenger($passenger,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$conpass){
	if( $this->setFname($fname)
	    &&$this->setLname($lname)
	    &&$this->setMname($mname)
	    &&$this->setStreetName($streetname)
	    &&$this->setcountry($country)
	    &&$this->setCity($city)
	    &&$this->setPass($password)
		&&$this->setEmail($email)
	    &&$this->setTelePhone($telephone)
	    &&$this->setPhone($phone)
	    &&$this->setGender($gender)
	    //&&$this->setCompany($nameCompany)
	    &&$this->setConPass($conpass))
	{
			$db=new Db();
			$passenger->add($db,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry());
			return true;
		}
		else
			return false;
	}
	public function showPassenger($passenger){
		$db=new Db();
		$sql=$passenger->show($db);
		return $sql;
		}
	public function updatePassenger($passenger,$id,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country){

		if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)){
			$db=new Db();
			$passenger->update($db,$id,$this->getFname(),$this->getMname(),$this->getLname(),$this->getEmail(),$this->getPhone(),$this->getTelePhone(),$this->getGender(),$this->getPassWord(),$this->getStreetName()
				,$this->getCity(),$this->getCountry());
			return true;
		}
		else
			return false;
	}	
	public function deletePassenger($passenger,$id){
		$db=new Db();
		$passenger->delete($db,$id);
	}
	public function addManager($db,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$type,$conpass){
			if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)&&$this->setWages($wages)&&$this->setConPass($conpass))
			{
				
		$db->insert('person','Fname',$fname,'Mname',$mname,'Lname',$lname,'Email',$email,'Phone',$phone,'Telephone',$telephone,'Gender',$gender
			,'password',$password,'Street_name',$streetname,'Country',$country,'City',$city);
		$last_id = $db->get_last_id();
		echo $last_id;
		if($type==0){
				$db->insert('manager','id_type',1,'wages',$wages,'id_person',$last_id);
			}
			else{
					$db->insert('manager','id_type',2,'wages',$wages,'id_person',$last_id);
				}
			return true;
			
			}
			else 
				return false;
	}
	public function ShowManager($db){
		
		$at=array('Person','manager');
		$aid=array('User_ID','id_person');
		$afd=array('User_ID','id_person');
		return $db->myfunc($at,$aid,$afd,'','','');
	}
	public function deleteManager($db,$id){

		$db->Delete('Person','User_ID',$id);
		$db->Delete('manager','id_person',$id);

	}
	public function updateManager($db,$id,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname,$city,$country,$wages,$type){
			if($this->setFname($fname)&&$this->setLname($lname)&&$this->setMname($mname)&&$this->setStreetName($streetname)
			&&$this->setcountry($country)&&$this->setCity($city)&&$this->setPass($password)
			&&$this->setEmail($email)&&$this->setTelePhone($telephone)&&$this->setPhone($phone)&&$this->setGender($gender)&&$this->setWages($wages)){
				$db->Update('manager',$id,'id_person','id_type',$type,'wages',$wages);
					$db->Update('person',$id,'User_ID','Fname',$fname,'Mname',$mname,'Lname',$lname,'Email',$email,'Phone',$phone,'Telephone'
						,$telephone,'Gender',$gender,'password',$password,'Street_name',$streetname,'Country',$country,'City',$city);
					
				return true;
			}else
			return false;
	}
        
        
	public function show_profile(Db $db){
	    $at  = array('person','manager');
	    $aid = array('User_ID','id_person');
	    $afd = array('User_ID');
	    return $db->myfunc($at, $aid, $afd, 'manager', 'Manager_ID', $_SESSION['id']);
	}
}

?>