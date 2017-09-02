<?php
require_once 'ticket.php';
require_once 'database.php';
/**
 * ticket test case.
 */
class ticketTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var ticket
     */
    private $ticket;
    private $db;
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated ticketTest::setUp()
        
        $this->ticket = new ticket();
        $this->db=new Db();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated ticketTest::tearDown()
        $this->ticket = null;
        
        parent::tearDown();
    }

 

 


    /**
     * Tests ticket->set_Ticket_ID()
     */
    public function testSet_Ticket_ID()
    {
        $this->ticket->set_Ticket_ID(5);
        $actual =$this->ticket->get_Ticket_ID(/* parameters */);
        $this->assertEquals(5, $actual);
        
       // $this->ticket->set_Ticket_ID(1);
    }

    /**
     * Tests ticket->set_Seat_no()
     */
    public function testSet_Seat_no()
    {
      $this->ticket->set_Seat_no(5);
        $actual =$this->ticket->get_Seat_no(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests ticket->set_class()
     */
    public function testSet_class()
    {
          $this->ticket->set_class(5);
        $actual =$this->ticket->get_class(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests ticket->set_id_fight()
     */
    public function testSet_id_fight()
    {
         $this->ticket->set_id_fight(5);
        $actual =$this->ticket->get_id_fight(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests ticket->set_id_customer()
     */
    public function testSet_id_customer()
    {
      $this->ticket->set_id_customer(5);
        $actual =$this->ticket->get_id_customer(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests ticket->get_Date_of_Booking()
     */
    public function testGet_Date_of_Booking()
    {
      $this->ticket->set_Date_of_Booking();
      
        $actual =$this->ticket->get_Date_of_Booking(/* parameters */);
        $this->assertEquals(date('l F j ,n, Y, g:i a '), $actual);
    }

    /**
     * Tests ticket->get_Ticket_ID()
     */
    public function testGet_Ticket_ID()
    {
        $this->ticket->set_Ticket_ID(1);
      
        $actual =$this->ticket->get_Date_of_Booking(/* parameters */);
        $this->assertNotEquals(5, $actual);
    }

    /**
     * Tests ticket->get_Seat_no()
     */
    public function testGet_Seat_no()
    {
        $this->ticket->set_Seat_no(1);
      
        $actual =$this->ticket->get_Seat_no(/* parameters */);
        $this->assertNotEquals(5, $actual);
    }

    /**
     * Tests ticket->get_class()
     */
    public function testGet_class()
    {
        $this->ticket->set_class(1);
      
        $actual =$this->ticket->get_class(/* parameters */);
        $this->assertNotEquals(5, $actual);
    }

    /**
     * Tests ticket->get_id_fight()
     */
    public function testGet_id_fight()
    {
        $this->ticket->set_id_fight(1);
      
        $actual =$this->ticket->get_id_fight(/* parameters */);
        $this->assertNotEquals(5, $actual);
    }

    /**
     * Tests ticket->get_id_customer()
     */
    public function testGet_id_customer()
    {
        $this->ticket->set_id_customer(1);
      
        $actual =$this->ticket->get_id_customer(/* parameters */);
        $this->assertNotEquals(5, $actual);
    }

    /**
     * Tests ticket->add_ticket_db()
     */
    public function testAdd_ticket_db()
    {
        $db=new Db();
       
        $this->ticket->set_Date_of_Booking();
        $this->ticket->set_class(253);
        $this->ticket->set_id_customer(1);
        $this->ticket->set_id_fight(12);
        $this->ticket->set_Seat_no(1);
        
        
        $t=$this->ticket->add_ticket_db($db);
        $this->ticket->delete($db, $this->ticket->get_Ticket_ID());
        $this->assertEquals($t,true);
        
        
    }

    /**
     * Tests ticket->delete_ticket_db()
     */
    public function testDelete_ticket_db()
    {
        $db=new Db();
         $row=$db->selectOneTable('ticket','Ticket_ID' , 2);
         $r=mysqli_fetch_array($row);
         $this->ticket->set_class($r['class']);
         $this->ticket->set_id_customer($r['id_customer']);
         $this->ticket->set_id_fight($r['id_fight']);
         $this->ticket->set_Seat_no($r['Seat_no']);
         $this->ticket->set_Ticket_ID($r['Ticket_ID']);
         $fla=$r['flag'];
         $d=$r['Date_of_Booking'];
         
        $actual=$this->ticket->delete($db, 2);
        $db->insert('ticket'
            ,'Ticket_ID'
            ,$this->ticket->get_Ticket_ID()
            ,'id_customer'
            ,$this->ticket->get_id_customer()
            ,'Seat_no'
            ,$this->ticket->get_Seat_no()
            ,'class'
            ,$this->ticket->get_class()
            ,'Date_of_Booking'
            ,$d
            ,'id_fight'
            ,$this->ticket->get_id_fight()
            ,'flag'
            ,$fla);
        $this->assertEquals(true,$actual);

    }

  

  



    /**
     * Tests ticket->display()
     */
    public function testDisplay()
    {
      $db=new Db();
        $actual=$this->ticket->display($db, 1);
     
        $this->assertnotEquals(null,$actual);
    }

  
 

    /**
     * Tests ticket->show()
     */
    public function testShow()
    {
        $db=new Db();
        $this->ticket->set_id_customer(1);
        $actual=$this->ticket->show($db);
        $this->assertNotEquals(null,$actual);
    }

    /**
     * Tests ticket->show_t()
     */
    public function testShow_t()
    {
         $db=new Db();
        $this->ticket->set_id_customer(1);
        $actual=$this->ticket->show_t($db);
        $this->assertNotEquals(null,$actual);
    }
}

