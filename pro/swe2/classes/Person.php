<?php

require_once('validation.php');?>
<?php
require_once('database.php');
class Person{
	private $fname;
	private $lname;
	private $mname;
	private $streetName;
	private $country;
	private $city;
	private $passWord;
	private $email;
	private $phone;
	private $telephone;
	private $gender;
	private $company;
	public function setFname($name){
		$valid=new validation();
		if($valid->valid_name($name)){
			$this->fname=$name;
			return true;
		}
		else
			return false;
		
	}
	public function setLname($name){
		$valid=new validation;
		if($valid->valid_name($name)){
			$this->lname=$name;
			return true;
		}
		else
			return false;
	}
	public function setMname($name){
		$valid=new validation;
		if($valid->valid_name($name)){
			$this->mname=$name;
			return true;
		}
		else
			return false;
	}
	public function setStreetName($name){
	$valid=new validation;
		if($valid->valid_name($name)){
			$this->streetName=$name;
			return true;
		}
		else
			return false;
	}
	public function setCountry($name){
	$valid=new validation;
		if($valid->valid_name($name)){
			$this->country=$name;
			return true;
		}
		else
			return false;
	}
	public function setCity($name){
	$valid=new validation;
		if($valid->valid_name($name)){
			$this->city=$name;
			return true;
		}
		else
			return false;
	}	
	public function setPass($name){
	$valid=new validation;
		if($valid->valid_pass($name)){
			$this->passWord=$name;
			return true;
		}
		else
			return false;
	}
	public function setConPass($name){
		//$valid =new validation();
			if($this->passWord==$name){
			
			return true;
		}
		else
			return false;
	}
	public function setEmail($name){
	$valid=new validation;
		if($valid->valid_email($name)){
			$this->email=$name;
			return true;
		}
		else
			return false;
	}
	public function setTelephone($name){
	$valid=new validation;
		if($valid->valid_phone($name)){
			$this->telephone=$name;
			return true;
		}
		else
			return false;
	}
	public function setPhone($name){
	$valid=new validation;	
		if($valid->valid_phone($name)){
			$this->phone=$name;
			return true;
		}
		else
			return false;
	}
	public function setGender($gender){
		$this->gender=$gender;
		return true;
	}
	public function setBno($name){
		$valid=new validation;
		 if(is_numeric($name)){
		 	return true;
		 }else
		 return false;
	}
	public function setCompany($name){
		$valid=new validation;
		if($valid->valid_name($name)){
			$this->company=$name;
			return true;
		}
		else
			return false;
	}
	public function setWages($name){
		if(is_numeric($name))
			return true;
		else return false;
	}
	public function getFname(){
		return $this->fname;
	}
	public function getLname(){
		return $this->lname;
	}
	public function getMname(){
		return $this->mname;
	}
	public function getStreetName(){
		return $this->streetName;
	}
	public function getCity(){
		return $this->city;
	}
	public function getCountry(){
		return $this->country;
	}
	public function getPassWord(){
		return $this->passWord;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getPhone(){
		return $this->phone;
	}
	public function getTelephone(){
		return $this->telephone;
	}
	public function getGender(){
		return $this->gender;
	}
	
	public function login(Db $db,$email,$pass)
	{
//	    echo $email;
	    if($id=mysqli_fetch_array($db->logion($email, $pass)))
	    {
	        
	        if($id1=mysqli_fetch_array($db->selectOneTable('manager','id_person',$id['User_ID'])))
	        {
	            $_SESSION['manager']=$id['Fname'];
	            $_SESSION['id']=$id1['Manager_ID'];
	            $_SESSION['manager_type']=$id1['id_type'];
	            $_SESSION['id_person']=$id1['id_person'];
	             
	           
	        }
	        if($id1=mysqli_fetch_array($db->selectOneTable('customer','id_person',$id['User_ID'])))
	        {
	            $_SESSION['customer']=$id['Fname'];
	            $_SESSION['id']=$id1['Customer_ID'];
	            $_SESSION['Customer_Type']=$id1['Customer_Type'];
	            $_SESSION['id_person']=$id1['id_person'];
	             
	        
	        }
	        if($id1=mysqli_fetch_array($db->selectOneTable('telebooker','id_person',$id['User_ID'])))
	        {
	            $_SESSION['telebooker']=$id['Fname'];
	            $_SESSION['id']=$id1['id'];
	            $_SESSION['id_person']=$id1['id_person'];
	             
	           
	        }

	    }
	    
	}
	
	
	public function logout (){
	    @session_destroy();
	   
	}
}/*
$a=new Db();
$aa=new Person();
$aa->login($a, 'amr_esam@yahoo.com', 'aaaaaaa');
echo  $_SESSION['customer'];*/

?>