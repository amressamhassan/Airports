<?php
require_once 'classes/Manager.php';
require_once 'classes/database.php';
require_once 'classes/TeleBooker.php';
require_once 'classes/TravelPersonnel.php';
require_once 'classes/Passenger.php';

/**
 * Manager test case.
 */
class ManagerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Manager
     */
    private $manager;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated ManagerTest::setUp()
        
        $this->manager = new Manager(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated ManagerTest::tearDown()
        $this->manager = null;
        
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
     * Tests Manager->addTeleBooker()
     */
  public function testAddTeleBooker()
    {
        $db=new Db();
        $tele=new TeleBooker();
        $actual=$this->manager->addTeleBooker($tele,'aaaa','aaaa','aaa','aaaa_aaaaa@yahoo.com','01062934237','01062934235','1',
            '123456789','street','cairo','egypt','2000','2','123456789');
      //  $i=$db->get_last_id();
        $this->assertEquals(TRUE, $actual);
      
        $db->Delete('Person', 'Fname', 'aaaa');
        $db->Delete('telebooker','wages','2000');
    }

    /**
     * Tests Manager->showTelebooker()
     */


   public function testShowTelebooker()
    {
        $db=new Db();
        $tele=new TeleBooker();
        $actual=$this->manager->addTeleBooker($tele,'ahmed','mohamed','ali','ahmed_sayed@yahoo.com','01062934237','01062934235','0','123456789','street','cairo','egypt','2000','2','123456789');
        $i=$db->get_last_id();
        $result=$this->manager->showTelebooker($tele);
        while($row=mysqli_fetch_assoc($result)){
            $actual=$row['Email'];   
        }
        $this->assertEquals('ahmed_sayed@yahoo.com', $actual);
        $db->Delete('Person', 'Email', 'ahmed_sayed@yahoo.com');
        $db->Delete('telebooker','person_id',$i);
   }

    /**
     * Tests Manager->updateTelebooker()
     */
    public function testUpdateTelebooker()
    {
        $db=new Db();
       
        $tele=new TeleBooker();
      //  $this->manager->addTeleBooker($tele,'ahmed','mohamed','ali','ahmed_sayed@yahoo.com','01062934237','01062934235','0','123456789','street','cairo','egypt','2000','2','123456789');
       // $i=$db->get_last_id();
        //$result=$this->manager->showTelebooker($tele);
        $result=$db->selectOneTable('Person','USER_ID','21');
       // $email='';
        while($row=mysqli_fetch_assoc($result)){
            $email=$row['Email'];
        }
        $this->manager->updateTelebooker($tele,'21','ahmed','ragae','mohamed'
            ,'amr_sayed@yahoo.com','01062934237',
            '01062934237','1','123456789','street','cairo','egypt','40000','5555');
        $result=$db->selectOneTable('Person','USER_ID', '21');
        //$actual='';
        while($row=mysqli_fetch_assoc($result)){
            $actual=$row['Email'];   
        }
           
        $this->assertNotEquals('aa_a@yahoo.com',$actual);
         $this->manager->UpdateTelebooker($tele,'21',',mahmoud','ahmed','mostafa','mahmoud_ahmed_2006@yahoo.com','01062934237','01062934237','1','123456789','abasl32ad','cairo','egypt','23000','500');
        //$db->Delete('telebooker','person_id',$i);
    }

    /**
     * Tests Manager->deleteTelebooker()
     */
    public function testDeleteTelebooker()
    {
        $db=new Db();
        $tele=new TeleBooker();
       
        // $last_id = mysqli_insert_id($db->conn);
       //  echo $last_id;
        $actual=$this->manager->deleteTelebooker($tele,'13');
       
         
        $this->assertEquals(true,$actual);
       // $this->manager->addTeleBooker($tele,'ahmed','ragae','mohamed','rico_ahmed_2006@yahoo.com','01062934237','01062934237','1','123456789','street','cairo','egypt','40000','5555','123456789');
    }

    /**
     * Tests Manager->addTravelPersonnel()
     */
    public function testAddTravelPersonnel()
    {
        // TODO Auto-generated ManagerTest->testAddTravelPersonnel()
        //$image,$type,$nameCompany,$conpass
        $db=new Db();
        $tele=new TravelPersonnel();
        $actual=$this->manager->addTravelPersonnel($tele,'ahmed','ragae','mohamed','mostafarr_ahmed_2006@yahoo.com','01062934237','01062934237','1','123456789','street','cairo','egypt','service.jpg','2','allla','123456789');
        $this->assertEquals(true, $actual);
       // $this->manager->deleteTravelPersonnel($tele,);
        $db->Delete('Person', 'Email', 'mostafarr_ahmed_2006@yahoo.com');
        $db->Delete('customer','Name_company','allla');
    }

    /**
     * Tests Manager->showTravelPersonnel()
     */
    public function testShowTravelPersonnel()
    {
        // TODO Auto-generated ManagerTest->testShowTravelPersonnel()
       // $this->markTestIncomplete("showTravelPersonnel test not implemented");
        $travel=new TravelPersonnel();
       $result=$this->manager->showTravelPersonnel($travel);
       while($row=mysqli_fetch_assoc($result)){
           $actual=$row["Email"];
       }
      $this->assertEquals('rico_ahmed_2006@yahoo.com', $actual);
    }

    /**
     * Tests Manager->updateTravelPersonnel()
     */
    public function testUpdateTravelPersonnel()
    {
        // TODO Auto-generated ManagerTest->testUpdateTravelPersonnel()
       // $this->markTestIncomplete("updateTravelPersonnel test not implemented");
        //$manager->updateTravelPersonnel($travel,$id,$fname,$mname,$lname,$email,$phone,$telephone,
          //  $i,$pass,$streetname,$city,$country,$logo,$type,$company)
          $travel=new TravelPersonnel();
        $this->manager->updateTravelPersonnel($travel,'189','ahmed','ahmed',
            'ahmed','rico_ahmed_2006@yahoo.com','010629342
            37','01062934237','1','123456789'
            ,'abas','egypt','cairo','airlineinclogo.png','22222','lenovo');
        $result=$this->manager->showTravelPersonnel($travel);
        while($row=mysqli_fetch_assoc($result)){
            $actual=$row["Name_company"];
        }
       $this->assertNotEquals('street',$actual);
       $this->manager->updateTravelPersonnel($travel,'189','ahmed','ahmed','a
           hmed','rico_ahmed_2006@yahoo.com','0106293423
           7','01062934237','1','123456789','street','egypt',
           'cairo','airlineinclogo.png','22222','lenovo');
    }

    /**
     * Tests Manager->deleteTravelPersonnel()
     */
    public function testDeleteTravelPersonnel()
    {
        // TODO Auto-generated ManagerTest->testDeleteTravelPersonnel()
        //$this->markTestIncomplete("deleteTravelPersonnel test not implemented");
        $travel=new TravelPersonnel();
        $actual=$this->manager->deleteTravelPersonnel($travel,'13');
        $this->assertNotEquals(false,$actual);
    }

    /**
     * Tests Manager->addPassenger()
     */
    public function testAddPassenger()
    {
        // TODO Auto-generated ManagerTest->testAddPassenger()
        //$this->markTestIncomplete("addPassenger test not implemented");
        $passenger=new Passenger();
       $actual=$this->manager->addPassenger($passenger,'aaaaaa','aaaaa',
           'aaaa','aaa_aaa@yahoo.com','01062934237','01062934237','1','123456789'
            ,'aaaa','aaaa','aaa','service.jpg','1','aaaa','123456789');
       $this->assertEquals(true, $actual);
       $db=new Db();
       $db->Delete('Person','Fname', 'aaaaaa');
       $db->Delete('customer', 'Name_company','aaaa');
    }
   // ($passenger,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname
    //,$city,$country,$image,$type,$nameCompany,$conpass)
    /**
     * Tests Manager->showPassenger()
     */
    public function testShowPassenger()
    {
       $passenger=new Passenger();
        $result=$this->manager->showPassenger($passenger);
        while ($row=mysqli_fetch_assoc($result)){
           $actual= $row['Type'];
        }
       // echo $actual;
        $this->assertEquals('22222', $actual);
    }

    /**
     * Tests Manager->updatePassenger()
     */
    public function testUpdatePassenger()
    {
        // TODO Auto-generated ManagerTest->testUpdatePassenger()
        //$this->markTestIncomplete("updatePassenger test not implemented");
       // $passenger,$id,$fname,$mname,$lname,$email,$phone,$telephone,$gender
       // ,$password,$streetname,$city,$country,$logo,$type,$company
       $passenger=new Passenger();
       $actual=$this->manager->updatePassenger( $passenger,'31','ibrahim'
           ,'Ahmed','mohamed','ibrahim_ahmed_2006@yahoo.com'
           ,'01062934237','01062934237','1','987654321'
           ,'msr','egypt','alex','saftey.jpg','8','(toshiba)');
        $this->assertEquals(true, $actual);    
        $this->manager->updatePassenger( $passenger,'31','ibrahim','Ahmed','mohamed',
            'ibrahim_ahmed_2006@yahoo.com','0
            1062934237','01062934237','
            1','987654321','msr','egypt','alex','saftey.jpg','8','(toshiba)');
    }

    /**
     * Tests Manager->deletePassenger()
     */
    public function testDeletePassenger()
    {
        // TODO Auto-generated ManagerTest->testDeletePassenger()
        //$this->markTestIncomplete("deletePassenger test not implemented");
        $passenger=new Passenger();
        $actual=$this->manager->deletePassenger($passenger,'13');
        $this->assertEquals(true, $actual);
    }

    /**
     * Tests Manager->addManager()
     */
    public function testAddManager()
    {
       // $db,$fname,$mname,$lname,$email,$phone,$telephone,$gender,$password,$streetname
        //,$city,$country,$wages,$type,$conpass
        
        $actual=$this->manager->addManager(new Db(),'aaa','aaa','aaa','aaa_aaa@aaa.com','01062934237','01062934237'
            ,'1','123456789','aaa','aaaa','aaa','2000','1','123456789');
        $this->assertEquals(true, $actual);
        $db=new Db();
        $db->Delete('Person', 'Fname', 'aaa');
        $db->Delete('manager','wages','2000');
    }

    /**
     * Tests Manager->ShowManager()
     */
    public function testShowManager()
    {
        // TODO Auto-generated ManagerTest->testShowManager()
        //$this->markTestIncomplete("ShowManager test not implemented");
        $db=new Db();
        $result=$this->manager->ShowManager($db);
        while ($row=mysqli_fetch_assoc($result)){
            $actual= $row['wages'];
        }
        $this->assertEquals('23000', $actual);  
    }

    /**
     * Tests Manager->deleteManager()
     */
    public function testDeleteManager()
    {
        // TODO Auto-generated ManagerTest->testDeleteManager()
        //$this->markTestIncomplete("deleteManager test not implemented");
        
      $actual=$this->manager->deleteManager(new Db(),'13');
      $this->assertEquals(true, $actual);
    }

    /**
     * Tests Manager->updateManager()
     */
    public function testUpdateManager()
    {
        // TODO Auto-generated ManagerTest->testUpdateManager()
       // $this->markTestIncomplete("updateManager test not implemented");
        
        $actual=$this->manager->updateManager(new Db(),'44','amal','fathi','Ahmed','nopop93@yahoo.com','01062934237','01062934265
            ','1','123456789','mansheya','egypt','cairo','1','23000');
        $this->assertEquals(false, $actual);
       $this->manager->updateManager(new Db(),'44','amal','fathi','Ahmed','nopop93@yahoo.com','01062934237','01062934265
            ','1','123456789','mansheya','egypt','cairo','1','23000');
    }
}

