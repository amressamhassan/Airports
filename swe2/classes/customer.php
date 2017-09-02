<?php
require_once 'database.php';
require_once 'ticket.php';
require_once 'payment.php';
require_once 'person.php';
class Customer extends Person{
	private $companyname;
	private $logo;
	private $type;
	
	public function setCompany($name){
		$valid=new validation;
		if($valid->valid_name($name)){
			$this->company=$name;
			return true;
		}
		else
			return false;
	}
	
	public function setlogo($name){
		$this->logo=$name;
		return true;
	}
	
	public function setType($name){
		$this->type=$name;
		return true;
	}
	
	public function getCompany(){
		return $this->companyname;
	}
	
	public function getLogo(){
		return $this->logo;
	}
	
	public function getType(){
		return $this->type;
	}
	
	public function reservation(Db $db,ticket $ticket,payment $payment,$id)
	{
	    $ticket->set_id_customer($id); //sision
	
	    $ticket->set_Date_of_Booking();
	    if($ticket->add_ticket_db($db)){
	   
	    $payment->payment($db,$ticket->get_Ticket_ID());
	    return true;
	    }
	    return false;
	}
	public function delete_reservation(Db $db,ticket $ticket)
	{
	    if($ticket->delete_ticket_db($db)){
	        return true;
	    }
	    return false;
	}

	public function display(Db $db,ticket $ticket)
	{
    return  $ticket->display($db,$ticket->get_Ticket_ID());
	}
	
	public function show_tict(Db $db,ticket $ticket){
	   return $ticket->show($db);
	}
	
	
        public function getCustomerNameById(Db $db,$id){
            $sql=$db->selectOneTable("customer", "Customer_ID", $id);
            $row=  mysqli_fetch_assoc($sql);
            $sql2=$db->selectOneTable("Person", "User_ID", $row['id_person']);
            $row2=  mysqli_fetch_assoc($sql2);
	   return $row2['Lname'];
	}
	
	
	public function show_profile(Db $db,$id){
	    $at  = array('person','customer');
	    $aid = array('User_ID','id_person');
	    $afd = array('User_ID');
	    return $db->myfunc($at, $aid, $afd, 'customer', 'Customer_ID', $id);
	}
	
}
?>