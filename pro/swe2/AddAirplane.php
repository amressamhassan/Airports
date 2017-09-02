<?php include 'include/header.php';  

$db= new Db();
$cd1=new Class_Details();
$cd2=new Class_Details();
$cd3=new Class_Details();
$cd4=new Class_Details();
$ap = new Airplane(null,$cd1,$cd2,$cd3,$cd4);
?>
<div class="container">
	 <form action="" method="post" >
        <table class="table">
            <tbody><tr>
                <td>Airplane ID</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Ex. K282" required="" type="text" name="id">
            </div></td>
            </tr>
            <tr>
             <td class="col-md-1">Class Details 1</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname1"></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds1"></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 2</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname2"></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds2"></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 3</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname3"></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds3"></div>
             </div>
      </td>
      </tr>
      <tr>
        <td class="col-md-1">Class Details 4</td>
          <td>  <div class="col-md-6">
              <div class="col-md-6"> Class name : <input class="form-control" placeholder="Ex. VIP" required="" type="text" name="cdname4"></div>
                <div class="col-md-6"> Seats : <input class="form-control" placeholder="Ex. 300 (in Seats)" required="" type="text" name="cds4"></div>
             </div>
      </td>
      </tr>
             </div></td>
            </tbody>
            </table>
             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Add" type="submit">
            </div>
       </form> 
        </div>
        
<?php

if(isset($_POST['id'])){
    $ap->setId($_POST['id']);
    $ap->getCd1()->setId_airplane($ap->getId());
    $ap->getCd2()->setId_airplane($ap->getId());
    $ap->getCd3()->setId_airplane($ap->getId());
    $ap->getCd4()->setId_airplane($ap->getId());
}

if($ap->checkAirplaneID($db, $ap->getId())){
    
    
    $message="Unsuccessful Please Enter A New ID For The New Airplane";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}
else{
if(isset($_POST['cdname1'])){
    $ap->getCd1()->setClass_name($_POST['cdname1']);
}
if(isset($_POST['cds1'])){
    $ap->getCd1()->setSeats($_POST['cds1']);
}
if(isset($_POST['cdname2'])){
    $ap->getCd2()->setClass_name($_POST['cdname2']);
}
if(isset($_POST['cds2'])){
    $ap->getCd2()->setSeats($_POST['cds2']);
}
if(isset($_POST['cdname3'])){
    $ap->getCd3()->setClass_name($_POST['cdname3']);
}
if(isset($_POST['cds3'])){
    $ap->getCd3()->setSeats($_POST['cds3']);
}
if(isset($_POST['cdname4'])){
    $ap->getCd4()->setClass_name($_POST['cdname4']);
}
if(isset($_POST['cds4'])){
    $ap->getCd4()->setSeats($_POST['cds4']);
}


$success=false;
if($ap->getId()!=""){
  
    $success=$ap->addAirplane($db);
    
}
if($success){
    $message="Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
}}
?>