<?php include 'include/header.php';
$db=new Db();
$ar=new Airport();
?>
<div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                              <th>ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $ar->showAirports($db);
                          
                          ?>
                        </tbody>
                      </table>
</div>