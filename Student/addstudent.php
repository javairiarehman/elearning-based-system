
<?php


if(!isset($_SESSION)){
    session_start();
}


include_once('../dbConnection.php');
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stupass=$_POST['stupass'];

    $sql="INSERT INTO student(stu_name,stu_email,stu_pass)
     VALUES ('$stuname','$stuemail','$stupass')";
if($conn->query($sql)==TRUE){
    echo json_encode("OK");
}
else{
    echo json_encode("FAILED");
}
}

//student login verification
if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass']))
{ 
$stuLogEmail = $_POST['stuLogEmail'];
$stuLogPass=$_POST['stuLogPass'];
$sql1="SELECT stu_email,stu_pass FROM student WHERE stu_email= '".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";
$result1=$conn->query($sql1);
$row=$result1->num_rows;
echo json_encode($row);
      if($row==1){
          $_SESSION['is_login'] = true;
          $_SESSION['stuLogEmail']=$stuLogEmail;
          
      }
}



?>