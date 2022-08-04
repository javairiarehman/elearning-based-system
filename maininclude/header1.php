<html>
    <head>
        <title>JM SCHOOL</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"></link>
         <link rel="stylesheet" href="../css/all.min.css"></link>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <!-- fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Macondo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css"></link>  
</head>
    <body>
    <script>


    </script>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg  pl-5 bg-dark  fixed-top">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JM SCHOOL</a>
    <span class="navbar-text">Learn and implement &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
      
      <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">HOME</a></li>

   

 

<?php
session_start();
if(isset($_SESSION['is_login'])){
  echo '<li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">COURSES</a></li>
  <li class="nav-item custom-nav-item"><a href="Student/stufeedback.php" class="nav-link">FEEDBACK</a></li>
  <li class="nav-item custom-nav-item"><a href="Student/myCourse.php" class="nav-link">My Courses</a></li>
  <li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">PROFILE</a></li>
  <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>';
}
else{
  echo '  <li class="nav-item custom-nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">FEEDBACK</a></li>
  <li class="nav-item custom-nav-item"><a href="courses1.php" class="nav-link">COURSES</a></li><li class="nav-item custom-nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">LOGIN</a></li>
  
  <li class="nav-item custom-nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">REGISTER</a></li>';
}
?>










      
      
      </ul>
    </div>
  </div>
</nav>
 <!-- end navigation  -->
        <!-- including scripts -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>
         <!-- ajex -->
        <script type="text/javascript" src="../js/ajaxrequest.js"> </script>
        <script type="text/javascript" src="../js/adminajaxrequest.js"> </script>
        <script src="../js/all.min.js"> </script>
        <!-- ending scripts -->