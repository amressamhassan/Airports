
<?php

require_once 'database.php';
?>
<?php


interface ticket_Observer
{
    public function add_ticket(Flight_subject $Flight_subject, Db $db);
    public function delete_ticket(Flight_subject $Flight_subject, $Ticket_ID);
    public function update(Db $db,$row,$id_mse);
    
}
interface display
{
    public function display(Db $db,$id);
}
/** 
 * @author amr
 * 
 */
class ticket implements ticket_Observer,display 
{

    private $Date_of_Booking;
    private $Ticket_ID;
    private $Seat_no;
    private $class;
    private $id_fight;
    private $id_customer;
    
    public  function set_Date_of_Booking()
    {
         $this->Date_of_Booking=date('l F j ,n, Y, g:i a ');
    }
    
    public  function set_Ticket_ID($Ticket_ID)
    {
       $this->Ticket_ID=$Ticket_ID;
    }
    
    public  function set_Seat_no($Seat_no)
    {
        $this->Seat_no=$Seat_no;
        //$this->Seat_no=201;
    }
    
    public  function set_class($class)
    {
        $this->class=$class;
        //$this->class=201;
    }
    public  function set_id_fight($id_fight)
    {
         $this->id_fight=$id_fight;
        // $this->id_fight=4;
    }
    
    public  function set_id_customer($id_customer)
    {
        
         $this->id_customer=$id_customer;
        // $this->id_customer=1;
    }
    /**********/

    public  function get_Date_of_Booking()
    {
       
        return  $this->Date_of_Booking;
    }
    
    public  function get_Ticket_ID()
    {

        return  $this->Ticket_ID;
    }
    
    public  function get_Seat_no()
    {
   
        return  $this->Seat_no;
    }
    
    public  function get_class()
    {
    
        return  $this->class;
    }
    public  function get_id_fight()
    {
        
        return  $this->id_fight;
    }
    
    public  function get_id_customer()
    {
        
        return  $this->id_customer;
    }
    
    /**function**/
   public function add_ticket_db(Db $db) 
   {
       
       
       $db->insert('ticket'
           ,'id_customer'
           ,$this->get_id_customer()
           ,'Seat_no'
           ,$this->get_Seat_no()
           ,'class'
           ,$this->get_class()
           ,'Date_of_Booking'
           ,$this->get_Date_of_Booking()
           ,'id_fight'
           ,$this->get_id_fight()
           ,'flag'
           ,0);
       $this->set_Ticket_ID($db->get_last_id());
       return  true;
   }
   
   public function delete_ticket_db(Db $db)
   {
      if($db->Delete('ticket'
           ,'Ticket_ID'
           ,$this->get_Ticket_ID())){
       
       return  true;}
       else {
           return false;
       }
   }
   
   public function  add_ticket(Flight_subject $Flight_subject,Db $db)
    {
        $Flight_subject->registerObserver($this, $db);
       
    }
    
    public function update(Db $db,$row,$id_mse)
    {
        //echo $this->get_Ticket_ID();
  
        $this->set_Ticket_ID($row['Ticket_ID']);
        $db->insert('msgonetomeny'
            ,'id_t',$this->get_Ticket_ID()
            ,'id_msg',$id_mse
            ,'read',0);

        
    }
    
    public function delete_ticket(Flight_subject $Flight_subject, $Ticket_ID)
    {
        $Flight_subject->removeObserver($this, $Ticket_ID);
        
    }
    public function display(Db $db,$id)
    {
        $at  = array('ticket','msgonetomeny','msg_figth');
        $aid = array('Ticket_ID','id_t','id_msg');
        $afd = array('Ticket_ID','id_msg');
        return  $result=$db->myfunc($at ,$aid,$afd,'ticket','Ticket_ID',$id." and msgonetomeny.read=0") ;
     
        
        
    }
    public function  delete($db,$id)
    {
        if($db->Delete('ticket','Ticket_ID',$id)){
            return true;
        }
        else 
        {
            return false;
        }
    }
  
    public function show(Db $db)
    {
    
      return   $result=$db->selectOneTable('ticket','id_customer',$this->get_id_customer());
    }
    
 public function show_tecit_all(Db $db)
    {
    
        return   $result=$db->show_tecit_all($this->get_id_customer());
    }
    
    public function show_t(Db $db)
    {
    
        return   $result=$db->show_tecit($this->get_id_customer());
    }
    
    public function show_tecit_all_all(Db $db)
    {
    
        return   $result=$db->show_tecit_all_all();
    }
    
    public function show_tecitm_all(Db $db)
    {
    
        return   $result=$db->show_tecitm_all();
    }
    
    
    public function active_ticket(Db $db)
    {
        return   $db->Update('ticket',$this->get_Ticket_ID(),'Ticket_ID','flag',1);
    }
}


?>