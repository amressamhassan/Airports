<?php require_once('Person.php');?>
<?php
class InternalEmployee extends Person {
	private $wages;
	private $bno;
	public function setWages($wages){
		if(is_numeric($wages)){
			$this->wages=$wages;
			return true;

		}else
		return false;
	}
	public function getWages(){
		return $this->wages;
	}

}
?>