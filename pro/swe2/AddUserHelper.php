<?php include 'include/header.php'; 
$mid=$_SESSION['id'];
$id=0;

$db = new Db();
$faq = new FAQ();
if(isset($_GET['id'])){
    if($_GET['id']>0){
    $id=$_GET['id'];
    $faq->setQuestionFromDatabase($db, $id);
    
    }
}
?>


<div class="container">
   <form action="" method="post" >
       
            <?php if($id>0){echo '<input name="id" type="hidden" value="'.$id.'"> ';} ?> 
   	<table class="table input_fields_wrap">
		<tr >
                <td class="col-md-1">Question</td>
                <td ><div class="input-group input col-md-7">
                        <input class="form-control " placeholder="Ex. How to login" required="" <?php if($id>0){echo 'value="'.$faq->getQuestion().'" readonly';}  ?> type="question" name="question" maxlength="100">
            </div></td>
            </tr>
    <button class="add_field_button">Add More Fields</button>
    
    
    <tr><div class=""></div>
                <td>Point 1</td>
                <td><div class="input-group input col-md-7">
                <input class="form-control" placeholder="Ex. Open user login" required=""  type="text" name="myPoint[]" maxlength="150">
            </div></td>
            </tr>
    
           
        </table><button type="submit" class="btn btn-info">Submit</button>
      </form>


</div>

<?php

if(isset($_POST['question'])){
    $faq->setQuestion($_POST['question']);
}
if(isset($_POST['myPoint'])){
    $faq->setAnswers($_POST['myPoint']);
}
//var_dump($faq);
$success=false;
if($faq->getQuestion()!=""&&$faq->getAnswers()!=null&&$mid!=null){
    if($id>0){
    $success=$faq->addFAQ($db,$mid,$id);}
    else{$success=$faq->addFAQ($db,$mid);}
}
if($success){
    $message="Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
}
?>