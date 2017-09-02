<?php
require_once 'include/header.php';
$id=0;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$db=new Db();
$faq = new FAQ();
$faq->setQuestionFromDatabase($db, $id);
?>

<div class="container">
    <form action="UpdateQuestion_Redirect.php" method="POST" >
             
             <input name="id" type="hidden" <?php echo 'value="'.$id.'"'; ?>>
        <table class="table">
            <tbody><tr>
                <td>Question</td>
                <td><div class="input-group input col-md-7">
                        <input class="form-control " placeholder="" required="" type="text" name="question" maxlength="101" <?php echo 'value="'.$faq->getQuestion().'"'; ?>>
            </div></td>
            </tr>
            </tbody>
        </table>
             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Update" type="submit" value="">
            </div>
       </form> 
        </div>
        