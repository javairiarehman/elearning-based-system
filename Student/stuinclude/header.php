<?php
include_once('../dbConnection.php');
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['is_login'])){
    $stuLogEmail=$_SESSION['stuLogEmail'];
}
if(isset($stuLogEmail)){
    $sql="SELECT stu_img FROM student WHERE stu_email='stuLogEmail'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
}
?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubantu" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#225470;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="studentProfile.php">JM School</a>

</nav>
<div class="container-fluid mb-5" style="margin-top:40px;">
<div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                
                <li class ="nav-item">
                    <a class="nav-link " href="studentProfile.php">change occupation</a>                </li>


<li class ="nav-item">
                    <a class="nav-link " href="myCourse.php">My course
</a>                </li>
<li class ="nav-item">
                    <a class="nav-link " href="./stufeedback.php">Feedback
</a>                </li>


<li class ="nav-item">
                    <a class="nav-link"  href="./changepassword.php">change password
</a>                </li>



<li class ="nav-item">
                    <a class="nav-link " href="../logout.php">logout
</a>                </li>

            </ul>
        </div>
    </nav>


    </body>
</html>