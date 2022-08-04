<?php
if(!isset($_SESSION)){
    session_start();
}
include('./stuinclude/header.php');
include_once('../dbConnection.php');
$stuEmail=$_SESSION['stuLogEmail'];

$sql="select * from student where stu_email='$stuEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $stuId=$row["stu_id"];

    $stuName=$row["stu_name"];
    $stuPass=$row["stu_pass"];
    $stuImg=$row["stu_img"];
}
if(isset($_REQUEST['updateStuNameBtn'])){
    
    $stuPass=$_REQUEST["stuPass"];
   


    $sql ="UPDATE  student set stu_pass='$stuPass' where stu_email='$stuEmail'";
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
            <label for="stuId">Email</label>
            <input type="text" class="form-control" id="stuEmail" name="stuEmail">
        </div>

        <div class="form-group">
            <label for="stuOcc">new password</label>
            <input type="text" class="form-control" id="stuPass" name="stuPass">
        </div>
        
            <button type="submit" class="btn btn-danger"
            id="updateStuNameBtn" name="updateStuNameBtn">Update</button>
<?php
            if(isset($msg)) 
           echo $msg; ?>
    </form>
</div>