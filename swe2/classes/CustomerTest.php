<?php
require_once 'Person.php';
require_once 'customer.php';

/**
 * Customer test case.
 */
class CustomerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Customer
     */
    private $customer;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated CustomerTest::setUp()
        
        $this->customer = new Customer(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CustomerTest::tearDown()
        $this->customer = null;
        
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
     * Tests Customer->setCompany()
     */
    public function testSetCompany()
    {
        // TODO Auto-generated CustomerTest->testSetCompany()
       // $this->markTestIncomplete("setCompany test not implemented");
        
       $actual =  $this->customer->setCompany("255");
        
        $this->assertEquals(false, $actual);
        //$this->assertEquals($expected, $actual)
    }

    /**
     * Tests Customer->setlogo()
     */
    public function testSetlogo()
    {
     //    TODO Auto-generated CustomerTest->testSetlogo()
        //$this->markTestIncomplete("setlogo test not implemented");
        
        $actual =  $this->customer->setlogo("service.jpg");
      // null;
     
       $this->assertEquals(TRUE, $actual);
    }

    /**
     * Tests Customer->setType()
     */
    public function testSetType()
    {
        // TODO Auto-generated CustomerTest->testSetType()
        //$this->markTestIncomplete("setType test not implemented");
      //  $actual = null;
         
        $actual = $this->customer->setType("11");
        $this->assertEquals(true, $actual);
    }

    /**
     * Tests Customer->getCompany()
     */
  
}

