<?php include 'include/header.php';  
$id=null;
$db = new Db();
$ar=new Airport();
if(isset($_GET["id"])){
    $id=$_GET["id"];
    
$ar->setAirportFromDB($db, $id);
}
?>

<div class="container">
    <form action="UpdateAirport_Redirect.php" method="POST" >
             
             <input name="id" type="hidden" <?php echo 'value="'.$id.'"'; ?>>
        <table class="table">
            <tbody><tr>
                <td>Code</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. K282" required="" type="text" name="code" maxlength="3" <?php echo 'value="'.$ar->getCode().'"'; ?>>
            </div></td>
            </tr>
              <tr>
                <td>Name</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. Cairo Airport" required="" type="text" name="name"<?php echo 'value="'.$ar->getName().'"'; ?>>
            </div></td>
            </tr>
                 <tr>
                <td>City</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. Cairo" required="" type="text" name="city" <?php echo 'value="'.$ar->getCity().'"'; ?>>
            </div></td>
            </tr>
                 <tr>
                <td>Country</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. Spain" required="" type="text" name="country" <?php echo 'value="'.$ar->getCountry().'"'; ?>>
            </div></td>
            </tr>
            
            </div></td>
            </tbody>
            </table>
             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Update" type="submit" value="">
            </div>
       </form> 
        </div>
        