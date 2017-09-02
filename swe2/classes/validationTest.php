<?php
require_once 'classes/validation.php';

/**
 * validation test case.
 */
class validationTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var validation
     */
    private $validation;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated validationTest::setUp()
        
        $this->validation = new validation(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated validationTest::tearDown()
        $this->validation = null;
        
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
     * Tests validation->valid_phone()
     */
    public function testValid_phone()
    {
        
        $actual=$this->validation->valid_phone('01062934237');
        $this->assertEquals(TRUE, $actual);
    }

    /**
     * Tests validation->valid_pass()
     */
    public function testValid_pass()
    {
        
        $actual=$this->validation->valid_pass('123456789');
         $this->assertEquals(TRUE, $actual);
    }

    /**
     * Tests validation->valid_name()
     */
    public function testValid_name()
    {
       
        
        $actual=$this->validation->valid_name('ahmed');
        $this->assertEquals(TRUE, $actual);
    }

    /**
     * Tests validation->valid_email()
     */
    public function testValid_email()
    {
     
        
        $actual=$this->validation->valid_email('rico_ahmed_2006@yahoo.com');
        $this->assertEquals(TRUE, $actual);
    }
}

