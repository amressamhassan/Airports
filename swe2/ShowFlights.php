<?php include 'include/header.php';  
$fl=new Flight();
$db=new Db();
$ap1=new Airport();
$ap2=new Airport();
?>
<div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Fare</th>
                            <th>Duration</th>
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $fl->showFlights($db,$ap1,$ap2);
                          ?>
                        </tbody>
                      </table>
</div>