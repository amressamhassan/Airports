<?php
require_once 'FlightInstance.php';
require_once 'database.php';
require_once 'Airplane.php';
require_once 'Class_Details.php';
require_once 'Airport.php';

require_once 'flight.php';


/**
 * FlightInstance test case.  
 */
class FlightInstanceTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var FlightInstance
     */
    private $flightInstance;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->flightInstance = new FlightInstance();
        $db = new Db();
        $cd1 = new Class_Details();
        $cd2 = new Class_Details();
        $cd3 = new Class_Details();
        $cd4 = new Class_Details();
        $aap = new Airport();
        $dap = new Airport();
        $fl = new Flight();
        $fl->setArriveAirport($aap);
        $fl->setDepartAirport($dap);
        $this->flightInstance->setFlight($fl);
        $airplane = new Airplane();
        $airplane->setCd1($cd1);
        $airplane->setCd2($cd2);
        $airplane->setCd3($cd3);
        $airplane->setCd4($cd4);
        $this->flightInstance->setAirplane($airplane);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated FlightInstanceTest::tearDown()
        $this->flightInstance = null;
        
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
     * Tests FlightInstance->getDepartdate()
     */
    public function testGetDepartdate()
    {
        $this->flightInstance->setDepartdate("5/4/2015");
        $actual =$this->flightInstance->getDepartdate(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->getDeparttime()
     */
    public function testGetDeparttime()
    {
        $this->flightInstance->setDeparttime("3");
        $actual =$this->flightInstance->getDeparttime(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->getArrivedate()
     */
    public function testGetArrivedate()
    {
        $this->flightInstance->setArrivedate("5/4/2015");
        $actual =$this->flightInstance->getArrivedate(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->getArrivetime()
     */
    public function testGetArrivetime()
    {
        $this->flightInstance->setArrivetime("3");
        $actual =$this->flightInstance->getArrivetime(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->getFlight()
     */
    public function testGetFlight()
    {
       $actual= $this->flightInstance->getFlight(/* parameters */);
       $this->assertNotEquals(null,$actual);
    }

    /**
     * Tests FlightInstance->getLegid()
     */
    public function testGetLegid()
    {
        $this->flightInstance->setLegid(1);
        $actual =$this->flightInstance->getLegid(/* parameters */);
        $this->assertEquals(1, $actual);
    }

    /**
     * Tests FlightInstance->getAirplane()
     */
    public function testGetAirplane()
    {
       $actual= $this->flightInstance->getAirplane(/* parameters */);
       $this->assertNotEquals(null,$actual);
    }

    /**
     * Tests FlightInstance->getSeats()
     */
    public function testGetSeats()
    {
        $this->flightInstance->setSeats(1);
        $actual =$this->flightInstance->getSeats(/* parameters */);
        $this->assertEquals(1, $actual);
    }

    /**
     * Tests FlightInstance->setDepartdate()
     */
    public function testSetDepartdate()
    {
        $this->flightInstance->setDepartdate("5/4/2015");
        $actual =$this->flightInstance->getDepartdate(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->setDeparttime()
     */
    public function testSetDeparttime()
    {
        $this->flightInstance->setDeparttime("3");
        $actual =$this->flightInstance->getDeparttime(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->setArrivedate()
     */
    public function testSetArrivedate()
    {
        $this->flightInstance->setArrivedate("5/4/2015");
        $actual =$this->flightInstance->getArrivedate(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->setArrivetime()
     */
    public function testSetArrivetime()
    {
        $this->flightInstance->setArrivetime("3");
        $actual =$this->flightInstance->getArrivetime(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->setFlight()
     */
    public function testSetFlight()
    {
       $actual= $this->flightInstance->getFlight(/* parameters */);
       $this->assertNotEquals(null,$actual);
    }

    /**
     * Tests FlightInstance->setLegid()
     */
    public function testSetLegid()
    {
        $this->flightInstance->setLegid(1);
        $actual =$this->flightInstance->getLegid(/* parameters */);
        $this->assertEquals(1, $actual);
    }

    /**
     * Tests FlightInstance->setAirplane()
     */
    public function testSetAirplane()
    {
       $actual= $this->flightInstance->getAirplane(/* parameters */);
       $this->assertNotEquals(null,$actual);
    }

    /**
     * Tests FlightInstance->setSeats()
     */
    public function testSetSeats()
    {
        $this->flightInstance->setSeats(1);
        $actual =$this->flightInstance->getSeats(/* parameters */);
        $this->assertEquals(1, $actual);
    }



    /**
     * Tests FlightInstance->showFlightsSelect()
     */
    public function testShowFlightsSelect()
    {
        $db = new Db();
        $aap = new Airport();
        $dap = new Airport();
        $fl=new Flight();
        $actual=$this->flightInstance->showFlightsSelect($fl, $db, $aap, $dap);
        $this->assertEquals(false, $actual);
    }

    /**
     * Tests FlightInstance->showAirplanesSelect()
     */
    public function testShowAirplanesSelect()
    {
        $db = new Db();
        $ap = new Airplane();
        $actual = $this->flightInstance->showAirplanesSelect($db,$ap);
        $this->assertEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->addFlightInstance()
     */
    public function testAddFlightInstance()
    {
        $db = new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flightInstance->setFlightInstanceFromDB($db, 7, $aap, $dap);
        $actual = $this->flightInstance->addFlightInstance($db);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->showFlights()
     */
    public function testShowFlights()
    {
        $db = new Db();
        $actual = $this->flightInstance->showFlights($db);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests FlightInstance->setFlightInstanceFromDB()
     */
    public function testSetFlightInstanceFromDB()
    {
        $db = new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flightInstance->setFlightInstanceFromDB($db, 7, $aap, $dap);
        $this->assertNotEquals(null, $this->flightInstance);
    }

    /**
     * Tests FlightInstance->updateFlightInstance()
     */
    public function testUpdateFlightInstance()
    {
        $db = new Db();
        $aap = new Airport();
        $dap = new Airport();
        $this->flightInstance->setFlightInstanceFromDB($db, 7, $aap, $dap);
        $this->flightInstance->updateFlightInstance($db);
        $this->assertNotEquals(null, $this->flightInstance);
    }

 
}

