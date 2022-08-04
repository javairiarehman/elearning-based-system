<?php

include('./dbConnection.php');
if(isset($_REQUEST['submitFeedbackBtn']))
{
    
    $name=$_REQUEST["name"];
    $subject=$_REQUEST["subject"];
    $email=$_REQUEST["email"];
    $message=$_REQUEST["message"];
    $sql="INSERT INTO contactus (name,subject,email,help) values ('$name','$subject','$email','$message')";
    if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Register Successfully</div>';
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Register</div>';
    }
}
?>



<html>
<div class="container mt-4" id="Contact"> <!--container start -->
<h2 class="text-center mb-4">CONTACT US</h2>

<div class="row1">
  <div class="col-md-8">
    <form action="" method="POST">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"><br>
      <input type="text" class="form-control" name="email" id="email"  placeholder="E-mail"><br>
      <textarea class="form-control" name="message" id="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
      <button type="submit" class="btn btn-danger"
            id="submitFeedbackBtn" name="submitFeedbackBtn">SUBMIT</button>
            <?php
            if(isset($msg)) 
           echo $msg; ?>
    </form>
  </div>
</div>
</div>






</html>