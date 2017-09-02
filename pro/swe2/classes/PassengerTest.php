<?php
require_once 'classes/Passenger.php';
require_once 'classes/database.php';

/**
 * Passenger test case.
 */
class PassengerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Passenger
     */
    private $passenger;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated PassengerTest::setUp()
        
        $this->passenger = new Passenger(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated PassengerTest::tearDown()
        $this->passenger = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests Passenger->add()
     */
    public function testAdd()
    {
        // TODO Auto-generated PassengerTest->testAdd()
       // $this->markTestIncomplete("add test not implemented");
       // ,'aaaaaa','aaaaa','aaaa','aaa_aaa@yahoo.com','01062934237','01062934237','1','123456789'
         //   ,'aaaa','aaaa','aaa','service.jpg','1','aaaa','123456789');
       $actual=$this->passenger->add(new Db(),'aaaaaa','aaaaa','aaaa','aaa_aaa@yahoo.com','01062934237','01062934237','1','123456789'
            ,'aaaa','aaaa','aaa','service.jpg','1','aaaa','123456789');
        $this->assertEquals(true, $actual);
        $db=new Db();
        $db->Delete('Person','Fname', 'aaaaaa');
        $db->Delete('customer', 'Name_company','aaaa');
    }

    /**
     * Tests Passenger->show()
     */
    public function testShow()
    {
        // TODO Auto-generated PassengerTest->testShow()
        //$this->markTestIncomplete("show test not implemented");
        
        $result=$this->passenger->show(new Db());
        while ($row=mysqli_fetch_assoc($result)){
            $actual= $row['Type'];
        }
        // echo $actual;
        $this->assertEquals('22222', $actual);
    }

    /**
     * Tests Passenger->update()
     */
    public function testUpdate()
    {
        // TODO Auto-generated PassengerTest->testUpdate()
        //$this->markTestIncomplete("update test not implemented");
       // $passenger,'31','ibrahim','Ahmed','mohamed','ibrahim_ahmed_2006@yahoo.com','01062934237','01062934237','1','987654321'
         //   ,'msr','egypt','alex','saftey.jpg','8','(toshiba)'
       $actual= $this->passenger->update(new Db(),'31','ibrahim','Ahmed','mohamed','ibrahim_ahmed_2006@yahoo.com','01062934237','01062934237','1','987654321'
          ,'msr','egypt','alex','saftey.jpg','8','(toshiba)');
       $this->assertEquals(true, $actual);
       $this->passenger->update(new Db(),'31','ibrahim','Ahmed'
           ,'mohamed','ibrahim_ahmed_2006@yahoo.com','01062934237','01062934237',
           '1','987654321'
           ,'msr','egypt','alex','saftey.jpg','8','(toshiba)');
    }

    /**
     * Tests Passenger->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated PassengerTest->testDelete()
       // $this->markTestIncomplete("delete test not implemented");
        
       $actual=$this->passenger->delete(new Db(),'13');
        $this->assertEquals(true, $actual);
    }
}

