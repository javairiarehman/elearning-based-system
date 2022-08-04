<?php
if(!isset($_SESSION)){
    session_start();
}
include('./stuinclude/header.php');
include_once('../dbConnection.php');
$stuEmail=$_SESSION['stuLogEmail'];

$sql="select * from student where stu_email='$stuEmail'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$stuId=$row["stu_id"];


if(isset($_REQUEST['submitFeedbackBtn']))
{
    
    $fcontent=$_REQUEST["f_content"];
    $sql="INSERT INTO feedback (f_content,stu_id) values ('$fcontent','$stuId')";
    if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">edit Successfully</div>';
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Add</div>';
    }
}
?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId">
        </div>
        <div class="form-group">
            <label for="f_content">Write Feedback</label>
            <textarea  class="form-control" id="f_content" name="f_content" row=2></textarea>
        </div>
        <button type="submit" class="btn btn-danger"
            id="submitFeedbackBtn" name="submitFeedbackBtn">Update</button>
<?php
            if(isset($msg)) 
           echo $msg; ?>
    </form>
</div>