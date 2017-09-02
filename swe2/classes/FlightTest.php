<?php
require_once 'FlightInstance.php';
require_once 'database.php';
require_once 'Airplane.php';
require_once 'Class_Details.php';
require_once 'Airport.php';

require_once 'flight.php';
/**
 * Flight test case.
 */
class FlightTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Flight
     */
    private $flight;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated FlightTest::setUp()
        $aap = new Airport();
        $dap = new Airport();
        $this->flight = new Flight(/* parameters */);
        $this->flight->setArriveAirport($aap);
        $this->flight->setDepartAirport($dap);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated FlightTest::tearDown()
        $this->flight = null;
        
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
     * Tests Flight->getArriveAirport()
     */
    public function testGetArriveAirport()
    {
        
        
        $actual=$this->flight->getArriveAirport(/* parameters */);
        $this->assertNotEquals(null, $actual);
    
    }

    /**
     * Tests Flight->getDepartAirport()
     */
    public function testGetDepartAirport()
    {
        $actual=$this->flight->getDepartAirport(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Flight->getFlightid()
     */
    public function testGetFlightid()
    {
        $this->flight->setFlightid(5);
        $actual =$this->flight->getFlightid(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->getSchDuration()
     */
    public function testGetSchDuration()
    {
        $this->flight->setSchDuration(5);
        $actual =$this->flight->getSchDuration(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->getFare()
     */
    public function testGetFare()
    {
        $this->flight->setFare(5);
        $actual =$this->flight->getFare(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->setArriveAirport()
     */
    public function testSetArriveAirport()
    {
        $aap = new Airport();
        $actual=$this->flight->setArriveAirport($aap);
        $this->assertNotEquals($aap, $actual);
    }

    /**
     * Tests Flight->setDepartAirport()
     */
    public function testSetDepartAirport()
    {
        $dap = new Airport();
        $actual=$this->flight->setArriveAirport($dap);
        $this->assertNotEquals($dap, $actual);
    }

    /**
     * Tests Flight->setFlightid()
     */
    public function testSetFlightid()
    {   
        $this->flight->setFlightid(5);
        $actual =$this->flight->getFlightid(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->setSchDuration()
     */
    public function testSetSchDuration()
    { 
        $this->flight->setSchDuration(5);
        $actual =$this->flight->getSchDuration(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->setFare()
     */
    public function testSetFare()
    {
        $this->flight->setFare(5);
        $actual =$this->flight->getFare(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Flight->showAirportsSelect()
     */
    public function testShowAirportsSelect()
    {$db=new Db();
        $ar=new Airport();
        $actual = $this->flight->showAirportsSelect($ar, $db);
        $this->assertnotEquals(true, $actual);
    }

    /**
     * Tests Flight->addFlight()
     */
    public function testAddFlight()
    {   $db=new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flight->setFlightFromDB($db, 7, $aap, $dap);
        $actual=$this->flight->addFlight($db);
        $this->assertEquals(true, $actual);
    }

    /**
     * Tests Flight->showFlights()
     */
    public function testShowFlights()
    {   
        $db=new Db();
        $aap = new Airport();
        $dap = new Airport();
        $actual=$this->flight->showFlights($db,$aap,$dap);
        $this->assertEquals(true, $actual);
    }

    /**
     * Tests Flight->deleteFlight()
     */
    public function testDeleteFlight()
    {
        $db=new Db();
        $actual=$this->flight->deleteFlight($db,8);
        $this->assertnotEquals(true, $actual);
    }

    /**
     * Tests Flight->setFlightFromDB()
     */
    public function testSetFlightFromDB()
    {
       $db=new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flight->setFlightFromDB($db, 7, $aap, $dap);
        $actual=$this->flight;
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Flight->updateFlight()
     */
    public function testUpdateFlight()
    {
        $db=new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flight->setFlightFromDB($db, 7, $aap, $dap);
        $actual=$this->flight->updateFlight($db);
        $this->assertEquals(true, $actual);
    }

    /**
     * Tests Flight->getFlightList()
     */
    public function testGetFlightList()
    {
        $db=new Db();
        $aap = new Airport();
        $dap = new Airport();
        $actual=$this->flight->getFlightList($db, $aap, $dap);
        $this->assertNotEquals(null, $actual);
    }
}

