<?php
include 'Airport.php';
include 'Class_Details.php';
include 'database.php';
/**
 * Airport test case.
 */
class AirportTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Airport
     */
    private $airport;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated AirportTest::setUp()
        
        $this->airport = new Airport(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated AirportTest::tearDown()
        $this->airport = null;
        
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
     * Tests Airport->getId()
     */
    public function testGetId()
    {
        $this->airport->setId(5);
        $actual =$this->airport->getId(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Airport->setId()
     */
    public function testSetId()
    {
        
        $this->airport->setId(3);
        $actual=$this->airport->getId();
        $this->assertEquals(3, $actual);
    }

    /**
     * Tests Airport->getCode()
     */
    public function testGetCode()
    {
   
        $this->airport->setCode("abc");
        $actual=$this->airport->getCode(/* parameters */);
        $this->assertEquals("abc", $actual);
    }

    /**
     * Tests Airport->getName()
     */
    public function testGetName()
    {
        $this->airport->setName("aaa");
        $actual=$this->airport->getName(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->getCity()
     */
    public function testGetCity()
    {
        $this->airport->setCity("aaa");
        $actual=$this->airport->getCity(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->getCountry()
     */
    public function testGetCountry()
    {
        $this->airport->setCountry("aaa");
        $actual=$this->airport->getCountry(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->setCode()
     */
    public function testSetCode()
    {
        $this->airport->setCode("abc");
        $actual=$this->airport->getCode(/* parameters */);
        $this->assertEquals("abc", $actual);
    }

    /**
     * Tests Airport->setName()
     */
    public function testSetName()
    {
        $this->airport->setName("aaa");
        $actual=$this->airport->getName(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->setCity()
     */
    public function testSetCity()
    {
       
        $this->airport->setCity("aaa");
        $actual=$this->airport->getCity(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->setCountry()
     */
    public function testSetCountry()
    {

        $this->airport->setCountry("aaa");
        $actual=$this->airport->getCountry(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Airport->addAirport()
     */
    public function testAddAirport()
    {
        $db=new Db();
        $this->airport->setCode("ADD");
        $this->airport->setName("Airport Dark of Doom");
        $this->airport->setCountry("Doom");
        $this->airport->setCity("Dark");
        $actual=$this->airport->addAirport($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airport->setAirportFromDB()
     */
    public function testSetAirportFromDB()
    {

        $db=new Db();
        $actual=$this->airport->setAirportFromDB($db,10);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airport->showAirports()
     */
    public function testShowAirports()
    {

        $db=new Db();
        $actual=$this->airport->showAirports($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airport->deleteAirport()
     */


    /**
     * Tests Airport->updateAirport()
     */
    public function testUpdateAirport()
    {
        $db=new Db();
        $this->airport->setAirportFromDB($db, 8);
        $actual=$this->airport->updateAirport($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airport->getAirportIdCountryList()
     */
    public function testGetAirportIdCountryList()
    {
       $db=new Db();
       $actual=$this->airport->getAirportIdCountryList($db);
       $this->assertNotEquals(null, $actual);
    }
}