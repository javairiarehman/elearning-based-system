<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubantu" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminstyle.css">

</head>
<body>
<?php
include('./admininclude/header.php');
include('../dbConnection.php');


$sql="SELECT * FROM COURSE ";
$result=$conn->query($sql);
$totalcourse=$result->num_rows;
$sql="SELECT * FROM student";
$result=$conn->query($sql);
$totalstu=$result->num_rows;
$sql="SELECT * FROM feedback";
$result=$conn->query($sql);
$totalfb=$result->num_rows;

?>
<div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
    <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
     <div class="card-header">Courses</div>
     <div class="class-body">
         <h4 class="card-title">
             <?php 
             echo $totalcourse;
             ?>
         </h4>
         <a class="btn text-white" href="courses.php" >View</a>
     </div>
    </div>
</div>



        <div class="col-sm-4 mt-5">
    <div class="card text-white  mb-3" style="max-width:18rem; background-color:green;">
     <div class="card-header">Students</div>
     <div class="class-body">
         <h4 class="card-title">  <?php 
             echo $totalstu;
             ?></h4>
         <a class="btn text-white" href="students.php" >View</a>
     </div>
    </div>
</div>



<div class="col-sm-4 mt-5"  >
    <div class="card text-white  mb-3" style="max-width:18rem; background-color:blue;" >
     <div class="card-header">feedbacks</div>
     <div class="class-body">
         <h4 class="card-title">  <?php 
             echo $totalfb;
             ?></h4>
         <a class="btn text-white" href="feedback.php" >View</a>
     </div>
    </div>
</div>
</div>

</div>
<?php
include('./admininclude/footer.php');
?>

</body>
</html>