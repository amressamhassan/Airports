<?php
require_once 'Class_Details.php';
require_once 'database.php';


/**
 * Class_Details test case.
 */
class Class_DetailsTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Class_Details
     */
    private $class_Details;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated Class_DetailsTest::setUp()
        
        $this->class_Details = new Class_Details(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated Class_DetailsTest::tearDown()
        $this->class_Details = null;
        
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
     * Tests Class_Details->getId()
     */
    public function testGetId()
    {
         $this->class_Details->setId(5);
        $actual =$this->class_Details->getId(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Class_Details->getSeats()
     */
    public function testGetSeats()
    {
         $this->class_Details->setSeats(5);
        $actual =$this->class_Details->getSeats(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Class_Details->getClass_name()
     */
    public function testGetClass_name()
    {
         $this->class_Details->setClass_name(5);
        $actual =$this->class_Details->getClass_name(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Class_Details->getId_airplane()
     */
    public function testGetId_airplane()
    {
         $this->class_Details->setId_airplane(5);
        $actual =$this->class_Details->getId_airplane(/* parameters */);
        $this->assertEquals(5, $actual);
    }

    /**
     * Tests Class_Details->setId()
     */
    public function testSetId()
    {
        $this->class_Details->setId(3);
        $actual=$this->class_Details->getId();
        $this->assertEquals(3, $actual);
    }

    /**
     * Tests Class_Details->setSeats()
     */
    public function testSetSeats()
    {
        $this->class_Details->setSeats(-3);
        $actual=$this->class_Details->getSeats();
        $this->assertEquals(-3, $actual);
    }

    /**
     * Tests Class_Details->setClass_name()
     */
    public function testSetClass_name()
    {
        $this->class_Details->setClass_name("aaa");
        $actual=$this->class_Details->getClass_name(/* parameters */);
        $this->assertEquals("aaa", $actual);
    }

    /**
     * Tests Class_Details->setId_airplane()
     */
    public function testSetId_airplane()
    {
        $this->class_Details->setId_airplane(1);
        $actual=$this->class_Details->getId_airplane(/* parameters */);
        $this->assertEquals(1, $actual);
    }

    /**
     * Tests Class_Details->addClassDetails()
     */
    public function testAddClassDetails()
    {$db=new Db();
        $this->class_Details->setSeats(300);
        $this->class_Details->setId_airplane(11);
        $this->class_Details->setClass_name("VIP");
        $actual=$this->class_Details->addClassDetails($db);
        $this->assertEquals(true,$actual);
    }

    /**
     * Tests Class_Details->updateClassDetails()
     */
    public function testUpdateClassDetails()
    {
        $db=new Db();
        $this->class_Details->setId(7);
        $this->class_Details->setSeats(300);
        $this->class_Details->setId_airplane(11);
        $this->class_Details->setClass_name("VIP");
        $actual=$this->class_Details->updateClassDetails($db);
        $this->assertEquals(null,$actual);
    }
}

    