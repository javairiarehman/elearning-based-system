<?php
include('./h1.php');
include('./dbConnection.php');
?>
<div class="container-fluid bg-success p-2">
<H2  class="  p-2">SELECT COURSES FOR YOU</H2>
</DIV>    

<div class="col-sm-9 mt-5">


<?php 
$sql="SELECT * FROM course";
$result=$conn->query($sql);
if($result->num_rows>0)
{
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Course ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        
      echo '<tr>';
           echo '<th scope="row">'.$row['course_id'].'</th>';
            echo '<td scope="row">'.$row['course_name'].'</td>';
           echo '<td scope="row">'.$row['course_author'].'</td> ';
          echo ' <td> ';
             
       echo '</tr>';
         } ?>
    </tbody>
</table>
<?php
}
else echo "0 result";
 ?>
</div>

</div>




</div>


<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('./dbConnection.php');
$stuEmail=$_SESSION['stuLogEmail'];




if(isset($_REQUEST['submitFeedbackBtn']))
{
    
    $a=$_REQUEST["email"];
    $b=$_REQUEST["id"];
    $sql="INSERT INTO my (stu_email,course_id) values ('$a','$b')";
    if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Register Successfully</div>';
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Register</div>';
    }
}
?>


<div class="col-sm-6 mt-5" >
<div class="container-fluid bg-success p-2">
<H2  class="  p-2">FOR REGISTER COURSE FILL THIS FORM</H2>
</DIV>    
<form class="mx-5"  method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="stuId">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group" >
            <label for="f_content">Course ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <button type="submit" class="btn btn-danger"
            id="submitFeedbackBtn" name="submitFeedbackBtn">ADD</button>
            <a class="btn btn-danger" href="./Student/myCourse.php">My Courses</a>
<?php
            if(isset($msg)) 
           echo $msg; ?>
    </form>
</div>

</div>


<?php
include('./f1.php');
?>