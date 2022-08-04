<?php
include('./maininclude/header.php');
include('./dbConnection.php');
?>

<br>
<!--start course page banner -->

<div class="container-fluid bg-dark">

<div class="row">
    <img src="./images/course.jpeg" alt="courses" style="height:500px;width:100%;object-fit:cover;box-shadow:10px;"/>
</div>
</div>
<!--end course page banner -->
<div class="container mt-5">
          <h1 class="text-center">All Courses</h1>
</div>
 <!--start of most popular course 1st card deck -->
 <br>
<br>  
<div class="row">
    

    <?php 
    $sql="SELECT * from course ";
    $result=$conn->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $course_id=$row['course_id'];
        echo '  <div class="col-4">
        <div class="card">
        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>
    
                  <a class="btn btn-primary text-white font-weight-bolder float-right" href="/web_project/coursedetails.php?course_id='.$course_id.'">ENROLL</a>  
      </div>
    </div>
        </div> 
                  ';
      }
    }
    
    ?>
   </div>         
 
<!-- end of courses -->
<br>
<br>

<?php
include('./maininclude/footer.php');
?>