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
    $stuOcc=$row["stu_occ"];
    $stuImg=$row["stu_img"];
}
if(isset($_REQUEST['updateStuNameBtn'])){
    
    $stuOcc=$_REQUEST["stuOcc"];
   


    $sql ="UPDATE  student set stu_name='$stuName',stu_occ='$stuOcc' where stu_email='$stuEmail'";
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
            <label for="stuOcc">Student Occupation</label>
            <input type="text" class="form-control" id="stuOcc" name="stuOcc">
        </div>
        
            <button type="submit" class="btn btn-danger"
            id="updateStuNameBtn" name="updateStuNameBtn">Update</button>
<?php
            if(isset($msg)) 
           echo $msg; ?>
    </form>
</div>