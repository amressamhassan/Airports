<?php include 'include/header.php';  
$db= new Db();
$cd1=new Class_Details();
$cd2=new Class_Details();
$cd3=new Class_Details();
$cd4=new Class_Details();
$ap = new Airplane(null,$cd1,$cd2,$cd3,$cd4);

?>
<div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Airplane ID</th>
                            <th>Class 1 Name</th>
                            <th>Seats</th>
                            <th>Class 2 Name</th>
                            <th>Seats</th>
                            <th>Class 3 Name</th>
                            <th>Seats</th>
                            <th>Class 4 Name</th>
                            <th>Seats</th>
                            <th>Operations</th>
                        </thead>
                        <tbody>
                          <?php
                          $db=new Db();
                          $ap->showAirplanes($db);
                          ?>
                        
                        </tbody>
                      </table>
</div>