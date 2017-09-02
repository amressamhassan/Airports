   <?php include 'include/header.php'; 

   $db=new Db();
   $feedback=new Feedback();
   $feedback->setUid($_SESSION['id']);
   ?>

      <div class="container">
   <form action="" method="post" >
    <table class="table">
           
      <tr>
                <td>Subject</td>
                <td><div class="input-group input">
                        <input class="form-control" placeholder="Ex. 183 (in $)" required="" type="text" name="subject" maxlength="50">
            </div></td>
            </tr>
       <tr>
                <td>Body</td>
                <td><div class="input-group input">
                        <textarea rows="4" cols="50" name="body" maxlength="399"></textarea>
            </div></td>
            </tr>
          <tr>
        <td class="col-md-1">Rating</td>
          <td>  <div class="col-md-3">
                <select name="rating" width="300" style="width: 100%">
                    <option value="0">Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
               </select>
                 
             </div>
      
      </td>
      </tr>
      <tr>
      <td><button class="btn btn-info" type="submit">Submit</button></td>
      </tr>
      
      </table>           
             </form>  
               
</div>
<?php
if(isset($_POST['subject'])){
    $feedback->setSubject($_POST['subject']);
}
if(isset($_POST['body'])){
    $feedback->setBody($_POST['body']);
}
if(isset($_POST['rating'])){
    $feedback->setRating($_POST['rating']);
}
//var_dump($feedback);
$success=false;
if($feedback->getBody()!=""&&$feedback->getSubject()!=""&&$feedback->getRating()!=0&&$feedback->getUid()!=""){
$success=$feedback->addFeedback($db);
}

if($success){
    $message="Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    
}
?>
