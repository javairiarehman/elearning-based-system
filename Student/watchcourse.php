<?php
if(!isset($_SESSION)){
    session_start();
}

//include('../dbConnection.php');
include('../dbConnection.php');
include('./stuinclude/footer.php');

$stuLogEmail=$_SESSION['stuLogEmail'];
?>

<html>
    <head>
        <title>Watch Lesson</title>
    </head>
    <body>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubantu" rel="stylesheet">
        <link rel="stylesheet" href="../css/stustyle.css">

<div class="container-fluid bg-success p-2">
    <h3 > Welcome to JM School</h3>
    <a class="btn btn-danger" href="./myCourse.php">My Courses</a>
</div>8

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 border-right">
            <h4 class="text-center">Lessons</h4>
            <ul id="playlist" class="nav flex-column">
                <?php
                 
                
                    if(isset($_GET['course_id'])){
                        $course_id=$_GET['course_id'];
                        $sql="SELECT * FROM lesson WHERE course_id='$course_id'";
                        $result=$conn->query($sql);
                        
                    
                    
                        while($row=$result->fetch_assoc()){
                            echo '<li class="nav-item border-bottom py-2" 
                            movieurl='.$row['lesson_link'].' style="cursor: pointer;">'.$row['lesson_name'].'</li>';
                                        }}                ?>
            </ul>
        </div>



        <div class="col-sm-8">
            <video id="videoarea" src="" class="mt-5 w-75 ml-2" controls></video>

        </div>
    </div>
</div>
<script type="text/javascript" src="../js/custom.js"></script>
    </body>
</html>