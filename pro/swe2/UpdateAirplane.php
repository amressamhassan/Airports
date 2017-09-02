<?php include 'include/header.php';  
$id=null;
$db = new Db();
$cd1=new Class_Details();
$cd2=new Class_Details();
$cd3=new Class_Details();
$cd4=new Class_Details();
$ap = new Airplane(null,$cd1,$cd2,$cd3,$cd4);
if(isset($_GET["id"])){
    $id=$_GET["id"];
    
$ap->setAirplaneFromDB($db, $id);
}
?>

<div class="container">
    <form action="UpdateAirplane_Redirect.php" method="post" >
        <table class="table">
            <tbody><tr>
                <td>Airplane ID</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. K282" required="" readonly  type="text" name="id" <?php echo 'value="'.$ap->getId().'"'; ?>>
            </div></td>
            </tr>
            <tr>
             <td class="col-md-1">Class Details 1</td>
          <td>  <div class="col-md-6">
                  <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname1" <?php echo 'value="'.$ap->getCd1()->getClass_name().'"'; ?>></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds1" <?php echo 'value="'.$ap->getCd1()->getSeats().'"'; ?>></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 2</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname2" <?php echo 'value="'.$ap->getCd2()->getClass_name().'"'; ?>></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds2"  <?php echo 'value="'.$ap->getCd2()->getSeats().'"'; ?>></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 3</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname3" <?php echo 'value="'.$ap->getCd3()->getClass_name().'"'; ?>></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds3" <?php echo 'value="'.$ap->getCd3()->getSeats().'"'; ?>></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 4</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname4"<?php echo 'value="'.$ap->getCd4()->getClass_name().'"'; ?>></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds4" <?php echo 'value="'.$ap->getCd4()->getSeats().'"'; ?>></div>
             </div>
      </td>
      </tr>
             </div></td>
            </tbody>
            </table>
             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Update" type="submit">
            </div>
       </form> 
        </div>
        