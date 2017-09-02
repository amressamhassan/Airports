<?php

class Database {

    private $_connection;
    private static $_instance; //The single instance
    private static $lock = FALSE;
    private $servername = "localhost";
    private $username = "root";
    private $_password = "";
    private $_database = "flight2";

    private static function TestAndSet(&$target) {
        $rv = $target;
        $target = TRUE;
        return $rv;
    }

    public static function getInstance() {
        do {
            while (self::TestAndSet(self::$lock));   // do nothing




            if (!self::$_instance) { // If no instance then make one
                self::$_instance = new self();
                self::$lock = FALSE;
                return self::$_instance;
            }
            self::$lock = FALSE;
            return self::$_instance;


            //      remainder section
        } while (TRUE);
    }

    private function __construct() {
        $this->_connection = new mysqli($this->servername, $this->username, $this->_password, $this->_database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }

    public function getConnection() {
        return $this->_connection;
    }

}

class Db {

    private $Allquery;
    private $allquery;
    private $Id;
    private $query;
    private $table;
    private $finalquery;
    private $conn;

    public function Db() {


        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    function myfunc($tables, $join_id, $join_on, $table, $id, $v) {
        $mainTable = $tables[0];
        $sql = "SELECT * FROM `$mainTable`";
        $i = 0;
        for ($i = 1; $i < count($tables); $i++) {

            $curTable = $tables[$i];
            $joinField = $join_on[$i - 1];
            $joinid = $join_id[$i];
            $sql.= "  JOIN `$curTable`  ON `$mainTable`.`$joinField`= `$curTable`.`$joinid`";
            $mainTable = $tables[$i];
        }
        if ($v) {
            $sql.= " where `$table`.`$id`=$v";
        }
        $query = mysqli_query($this->conn, $sql);
        //echo $sql;
        return mysqli_query($this->conn, $sql);
    }

    public function flight_instance_tailored_function() {
        $sql = "SELECT *,AirportArrive.Country as aac,AirportDepart.Country as adc,AirportArrive.Name as aan, AirportDepart.Name as adn,SUM(seats) as Seat FROM `flight_instance` JOIN `airplane` ON `airplane`.`Airplane_ID`=`flight_instance`.`id_Airplane` JOIN`class_details` ON `class_details`.`id_Airplane`=`airplane`.`Airplane_ID` JOIN `flight` ON `flight`.`flight_id`=`flight_instance`.`id_leg_flight` JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id` JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id` GROUP BY `flight_instance`.`iid` ";
        return mysqli_query($this->conn, $sql);
    }

    public function flight_instance_tailored_function_with_ID($id) {
        $sql = "SELECT *,AirportArrive.Country as aac,AirportDepart.Country as adc,AirportArrive.Name as aan, AirportDepart.Name as adn,SUM(seats) as Seat FROM `flight_instance` JOIN `airplane` ON `airplane`.`Airplane_ID`=`flight_instance`.`id_Airplane` JOIN`class_details` ON `class_details`.`id_Airplane`=`airplane`.`Airplane_ID` JOIN `flight` ON `flight`.`flight_id`=`flight_instance`.`id_leg_flight` JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id` JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id` WHERE `flight_instance`.`iid`=$id GROUP BY `flight_instance`.`iid` ";
        return mysqli_query($this->conn, $sql);
    }

    Public function select($Table1, $coulmn1, $Table2, $coulmn2) {
        $this->query = "select*  from $Table1 join $Table2 on $Table1.$coulmn1=$Table2.$coulmn2";
        $this->Allquery = $this->query;
        $this->Id = $coulmn1;
        $this->table = $Table1;
        $this->allquery = $this->Allquery;
        /* $this->query(); */
    }

    public function query() {
        //where $this->Id=$ID
        $query1 = mysqli_query($this->conn, "$this->allquery ");
        return $query1;
    }

    public function query2($sql) {

        $query1 = mysqli_query($this->conn, $sql);
        return $query1;
    }

    public function get_last_id() {
        $last_id = mysqli_insert_id($this->conn);
        return $last_id;
    }

    public function selectFromAnother($Table1, $coulmn1) {

        $this->Allquery = "$this->Allquery join $Table1 on $Table1 .$coulmn1=$this->table.$this->Id";
        $this->allquery = $this->Allquery;
    }

    Public function selectOneTable($Table3, $coulmn2, $id2) {


        $sql = "select * from $Table3 where $Table3.$coulmn2 = $id2";
        //echo $sql;
        $query1 = mysqli_query($this->conn, $sql);
        return $query1;
    }

    Public function logion($email, $pass) {


        $sql = "select User_ID,Fname from person  where Email='$email' and Password='$pass'";
        // echo $sql;
        $query1 = mysqli_query($this->conn, $sql);
        return $query1;
    }

    Public function selectOneTable1($Table3) {


        $sql = "select* from $Table3";
        $query1 = mysqli_query($this->conn, $sql);
        // echo $sql;
        return $query1;
    }

    public function insert(...$table) {

        $count = count($table);
        $Table = $table[0];
        $value = "insert into `$Table` ";
        $values = "(";
        $column = "(";
        for ($i = 1; $i <= $count - 1; $i++) {
            if ($i % 2 == 0) {
                if ($i < $count - 1)
                    $values = "$values '$table[$i]',";
                else
                    $values = "$values '$table[$i]'";
            }else {
                if ($i + 2 > $count - 1)
                    $column = "$column `$table[$i]`";
                else
                    $column = "$column `$table[$i]`,";
            }
        }

        $sql = "$value $column) values $values) ";
//        echo $sql;
        mysqli_query($this->conn, $sql);
    }
    function tailoredtemp() {
        return mysqli_query($this->conn, "SELECT * FROM `help_answer` JOIN `help_qustion` ON `help_answer`.`id_help_q` = `help_qustion`.`id`");
    }
    function tailoredtemp2($month) {
        return mysqli_query($this->conn, "SELECT *,SUM(`flight`.`fare`) AS flightsum FROM `ticket` JOIN `flight_instance` ON `ticket`.`id_fight` = `flight_instance`.`iid` JOIN `flight` ON `flight`.`flight_id` = `flight_instance`.`id_leg_flight` WHERE `flight_instance`.`Date_depart` LIKE '".$month."%'");
    }
    function tailoredtemp3() {
        return mysqli_query($this->conn, "SELECT *,COUNT(*) AS ratingcount FROM feedback group by Rating");
    }
    function tailoredtemp4() {
        return mysqli_query($this->conn, "SELECT `airport`.`Country`,COUNT(`ticket`.`Ticket_ID`) AS flightsum FROM `ticket` JOIN `flight_instance` ON `ticket`.`id_fight` = `flight_instance`.`iid` JOIN `flight` ON `flight`.`flight_id` = `flight_instance`.`id_leg_flight` JOIN `airport` ON `flight`.`id_airport_arrive` = `airport`.`id` GROUP BY `airport`.`Country` ORDER BY flightsum DESC");
    }
    function tailoredtemp5() {
        return mysqli_query($this->conn, "SELECT `airplane`.`Airplane_ID`,COUNT(`ticket`.`Ticket_ID`) AS flightsum FROM `ticket` JOIN `flight_instance` ON `ticket`.`id_fight` = `flight_instance`.`iid` JOIN `airplane` ON `flight_instance`.`id_Airplane` = `airplane`.`Airplane_ID` GROUP BY `airplane`.`Airplane_ID` ORDER BY flightsum ASC ");
    }
    function tailoredtemp6() {
        return mysqli_query($this->conn, "SELECT *,COUNT(ticket.Ticket_ID) as c FROM `ticket` JOIN Customer ON customer.Customer_ID=ticket.id_customer ORDER BY Count(ticket.Ticket_ID) DESC");
    }
    function tailoredtemp7() {
        return mysqli_query($this->conn, "SELECT `airport`.`Country`,SUM(`flight`.`fare`) as s FROM `ticket` JOIN `flight_instance` ON `ticket`.`id_fight`=`flight_instance`.`iid` JOIN `flight` ON `flight`.`flight_id` = `flight_instance`.`id_leg_flight` JOIN`airport` ON `flight`.`id_airport_arrive` = `airport`.`id`GROUP BY `airport`.`Country` ORDER BY SUM(`flight`.`fare`) DESC");
    }
    function tailoredtemp8($countsubject) {
        //Count
//        echo ("SELECT Count(*) as c FROM ".$countsubject."");
        return mysqli_query($this->conn, "SELECT Count(*) as c FROM ".$countsubject."");
    }
    function tailoredtemp9($id) {
        //Count reserved seats of each flight_instance
        return mysqli_query($this->conn, "SELECT Count(*) as c FROM `ticket` JOIN `flight_instance` ON `ticket`.`id_fight`=`flight_instance`.`iid` WHERE `flight_instance`.`iid` = ".$id." GROUP BY (`ticket`.`id_fight`)");
    }
    function insert2($title, $desc, $path) {
        $sql = "INSERT INTO `describe_view`(`title`, `path`, `Describe`, `id_admin`) VALUES ('$title','$path','$desc','1')";
        mysqli_query($this->conn, $sql);
    }

    public function Delete($table, $column, $id) {

        $sql = "delete from $table where $column=$id";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        }
    }

    public function GROUP($culs, $fun, $alias, $cul, $table, $GROUP) {
        $sql = "SELECT ";
        for ($i = 0; $i < count($culs); $i++) {

            $curTable = $culs[$i];
            $sql.= " $curTable ,  ";
        }
        $sql .= " $fun($cul) as $alias FROM $table GROUP BY $GROUP";
// 	echo($sql);
        return mysqli_query($this->conn, $sql);
    }

    public function Update(...$table) {

        $count = count($table);
        $Table = $table[0];
        $id = $table[1];
        $column = $table[2];
        $value = "Update $Table set ";
        $values = " ";
        for ($i = 3; $i <= $count - 2; $i++) {
            if (($i + 1) == $count - 1) {
                $t = $i + 1;
                $values = " $values $table[$i] = '$table[$t] '";
            } else {
                $t = $i + 1;
                $values = " $values $table[$i]= '$table[$t]', ";
                $i = $i + 1;
            }
        }
        $sql = "$value $values where $column=$id ";
echo $sql."<br>";
        if(mysqli_query($this->conn, $sql))
            return true;
            else 
                return false;
    }

    public function show_tecit($id) {
        $sql = "SELECT * , AirportArrive.Country as aac,
                     AirportDepart.Country as adc,
                     AirportArrive.Name as aan, 
                     AirportDepart.Name as adn
FROM flight_instance JOIN `ticket` ON `ticket`.`id_fight`=flight_instance.iid
JOIN class_details on ticket.class=class_details.id
JOIN flight on flight_instance.id_leg_flight=flight.flight_id
JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id` 
JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id` 
 where ticket.id_customer=$id and ticket.flag=true ORDER BY `ticket`.`Date_of_Booking`
          ";
        //echo $sql;
        return mysqli_query($this->conn, $sql);
    }
    public function show_tecit_all($id) {
        $sql = "SELECT * , AirportArrive.Country as aac,
        AirportDepart.Country as adc,
        AirportArrive.Name as aan,
        AirportDepart.Name as adn
        FROM flight_instance JOIN `ticket` ON `ticket`.`id_fight`=flight_instance.iid
        JOIN class_details on ticket.class=class_details.id
        JOIN flight on flight_instance.id_leg_flight=flight.flight_id
        JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id`
        JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id`
        where ticket.id_customer=$id   ORDER BY `ticket`.`Date_of_Booking`
        ";
        //echo $sql;
        return mysqli_query($this->conn, $sql);
    }
    public function show_tecitm_all() {
        $sql = "SELECT * , AirportArrive.Country as aac,
        AirportDepart.Country as adc,
        AirportArrive.Name as aan,
        AirportDepart.Name as adn
        FROM flight_instance JOIN `ticket` ON `ticket`.`id_fight`=flight_instance.iid
        JOIN class_details on ticket.class=class_details.id
        JOIN flight on flight_instance.id_leg_flight=flight.flight_id
        JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id`
        JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id`
        where ticket.flag=true ORDER BY `ticket`.`Date_of_Booking`
        ";
        //echo $sql;
        return mysqli_query($this->conn, $sql);
    }
    public function show_tecit_all_all() {
        $sql = "SELECT * , AirportArrive.Country as aac,
        AirportDepart.Country as adc,
        AirportArrive.Name as aan,
        AirportDepart.Name as adn
        FROM flight_instance JOIN `ticket` ON `ticket`.`id_fight`=flight_instance.iid
        JOIN class_details on ticket.class=class_details.id
        JOIN flight on flight_instance.id_leg_flight=flight.flight_id
        JOIN `airport` as AirportArrive ON `flight`.`id_airport_depart`=AirportArrive.`id`
        JOIN `airport` as AirportDepart ON `flight`.`id_airport_arrive`=AirportDepart.`id`
          ORDER BY `ticket`.`Date_of_Booking`
        ";
        //echo $sql;
        return mysqli_query($this->conn, $sql);
    }
}

//$aa->Update('person','6','User_ID','Fname','ahmed');
//$aa->Delete('manager_type','id','2');
/*
  $aa->select('person','User_Id','aircraft_type','Aircraft_Type_id');
  echo "<br>";
  $aa->selectFromAnother('manager_type ','id');
  $aa->selectFromAnother('services','id');
  $sql2=$aa->query(1);
  while($row=mysqli_fetch_assoc($sql2)) {
  echo $row["Capacity"]." ".$row["Mname"] ." ".$row["type"]." ".$row["Services"] ;
  }
  // */
//$sql2=$aa->selectOneTable('person','User_id',6);
//while($row=mysqli_fetch_assoc($sql2)) {
//echo"<br>" .$row["Mname"]."<br>".$row["Fname"];
//  }
//echo $row["type"]. " ".$row["Capacity"]." ".$row["Mname"]." ".$row["Services"];
?>