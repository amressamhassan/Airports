<?php
require_once 'Airplane.php';
require_once 'database.php';
require_once 'Class_Details.php';


/**
 * Airplane test case.
 */
class AirplaneTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Airplane
     */
    private $airplane;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $db=new Db();
        $cd1=new Class_Details();
        $cd2=new Class_Details();
        $cd3=new Class_Details();
        $cd4=new Class_Details();
        $this->airplane = new Airplane(1,$cd1,$cd2,$cd3,$cd4);
        $this->airplane->setAirplaneFromDB($db,8);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated AirplaneTest::tearDown()
        $this->airplane = null;
        
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
     * Tests Airplane->getId()
     */
    public function testGetId()
    {
        $this->airplane->setId(5);
        $actual =$this->airplane->getId(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Airplane->getCd1()
     */
    public function testGetCd1()
    {   $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd1($cd);
        $actual =$this->airplane->getCd1(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->getCd2()
     */
    public function testGetCd2()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd1($cd);
        $actual =$this->airplane->getCd2(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->getCd3()
     */
    public function testGetCd3()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd1($cd);
        $actual =$this->airplane->getCd3(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->getCd4()
     */
    public function testGetCd4()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd1($cd);
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->setId()
     */
    public function testSetId()
    {
        $this->airplane->setId(-5);
        $actual =$this->airplane->getId(/* parameters */);
        $this->assertNotEquals(-5, $actual);
    }

    /**
     * Tests Airplane->setCd1()
     */
    public function testSetCd1()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd1($cd);
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->setCd2()
     */
    public function testSetCd2()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd2($cd);
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->setCd3()
     */
    public function testSetCd3()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd3($cd);
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->setCd4()
     */
    public function testSetCd4()
    {
        $cd=new Class_Details();
        $cd->setId(1);
        $this->airplane->setCd4($cd);
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->addAirplane()
     */
    public function testAddAirplane()
    {
        $db=new Db();
        $actual =$this->airplane->getCd4(/* parameters */);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->showAirplanes()
     */
    public function testShowAirplanes()
    {   $db=new Db();
        $actual=$this->airplane->showAirplanes($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airplane->deleteAirplane()
     */
    public function testDeleteAirplane()
    {
      $db=new Db();
        $actual=$this->airplane->deleteAirplane($db,12);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airplane->setAirplaneFromDB()
     */
    public function testSetAirplaneFromDB()
    {
        $db=new Db();
        $actual=$this->airplane->setAirplaneFromDB($db,10);
        $this->assertNotEquals(null, $actual);
    }

    /**
     * Tests Airplane->updateAirplane()
     */
    public function testUpdateAirplane()
    {
        $db=new Db();
        $this->airplane->setAirplaneFromDB($db, 8);
        $actual=$this->airplane->updateAirplane($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Airplane->getAirplanesList()
     */
    public function testGetAirplanesList()
    {
       $db=new Db();
       $actual=$this->airplane->getAirplanesList($db);
       $this->assertNotEquals(null, $actual);
    }
}

