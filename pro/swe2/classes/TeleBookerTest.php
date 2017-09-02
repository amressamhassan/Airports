<?php
require_once 'classes/TeleBooker.php';
require_once 'classes/TeleBooker.php';

/**
 * TeleBooker test case.
 */
class TeleBookerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var TeleBooker
     */
    private $teleBooker;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated TeleBookerTest::setUp()
        
        $this->teleBooker = new TeleBooker(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TeleBookerTest::tearDown()
        $this->teleBooker = null;
        
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
     * Tests TeleBooker->setBno()
     */
    public function testSetBno()
    {
        // TODO Auto-generated TeleBookerTest->testSetBno()
        //$this->markTestIncomplete("setBno test not implemented");
        
       $actual=$this->teleBooker->setBno('22');
         $this->assertEquals(TRUE, $actual);
    }

    /**
     * Tests TeleBooker->getBno()
     */
   // public function testGetBno()
   // {
        // TODO Auto-generated TeleBookerTest->testGetBno()
     //   $this->markTestIncomplete("getBno test not implemented");
        
       // $this->teleBooker->getBno(/* parameters */);
    //}

    /**
     * Tests TeleBooker->add()
     */
    public function testAdd()
    {
        // TODO Auto-generated TeleBookerTest->testAdd()
       // $this->markTestIncomplete("add test not implemented");
      $actual=$this->teleBooker->add(new Db(),'aaa','aaaa'
          ,'aaaa','ahmed_sayed@yahoo.com'
          ,'01062934237','01062934235','1','123456789','street',
          'cairo','egypt','2000','2','123456789');
      //$i=$db->get_last_id();
      $this->assertEquals(TRUE, $actual);
      $db=new Db();
      $db->Delete('Person', 'Fname', 'aaa');
      $db->Delete('telebooker','wages','2000');
    }

    /**
     * Tests TeleBooker->show()
     */
    public function testShow()
    {
        // TODO Auto-generated TeleBookerTest->testShow()
       // $this->markTestIncomplete("show test not implemented");
        
       $result= $this->teleBooker->show(new Db());
       while ($row=mysqli_fetch_assoc($result)){
           $actual= $row['Bno'];
       }
       // echo $actual;
       $this->assertEquals('222', $actual);
    }

    /**
     * Tests TeleBooker->Update()
     */
    public function testUpdate()
    {
        $db=new Db();
        $result=$db->selectOneTable('Person','USER_ID','21');
        // $email='';
        while($row=mysqli_fetch_assoc($result)){
            $email=$row['Email'];
        }
        
        $this->teleBooker->Update(new Db(),'21','ahmed','ragae','mohamed'
            ,'amr_sayed@yahoo.com','01062934237',
            '01062934237','1','123456789','street','cairo','egypt','40000','5555');
            $result=$db->selectOneTable('Person','USER_ID', '21');
            //$actual='';
            while($row=mysqli_fetch_assoc($result)){
                $actual=$row['Email'];
            }
            $this->assertNotEquals('aa_a@yahoo.com',$actual);
            $this->teleBooker->Update(new Db(),'21',',mahmoud','ahmed','mostafa','mahmoud_ahmed_2006@yahoo.com','01062934237','01062934237','1','123456789','abasl32ad','cairo','egypt','23000','500');
    }
    

    /**
     * Tests TeleBooker->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated TeleBookerTest->testDelete()
       // $this->markTestIncomplete("delete test not implemented");
        
       $actual= $this->teleBooker->delete('13',new Db());
       $this->assertEquals(true, $actual);
    }
}

