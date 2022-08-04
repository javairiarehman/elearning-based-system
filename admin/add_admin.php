
<?php


if(!isset($_SESSION)){
    session_start();
}


include_once('../dbConnection.php');


//student admin verification
if(isset($_POST['adminLogEmail']))
{ 
   
$adminLogEmail = $_POST['adminLogEmail'];
$adminLogPass=$_POST['adminLogPass'];
$sql1="SELECT admin_email FROM admin WHERE admin_email= '".$adminLogEmail."' ;
$result1=$conn->query($sql1);
$row=$result1->num_rows;
echo json_encode($row);
      if($row==1){
          $_SESSION['is_login'] = true;
          $_SESSION['adminLogEmail']=$adminLogEmail;
          
      }
}

?>