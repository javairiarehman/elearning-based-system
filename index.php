<?php
include('./maininclude/header.php');
include('./dbConnection.php');
?>

       

        <!-- start video background -->
        <div class="container-fluid remove-vid-marg">
            <div class="vid-parent">
                <video playsinline autoplay muted loop>
                    <source src="video/video.mp4" >
                </video>
                <div class="vid-overlay"></div>
                 

            </div>
            <div class="vid-content">
                <h1 class="my-content">Welcome to JM SCHOOL</h1>
                <small class="my-content">Learn and implement</small> <br><br>

            
           
   
            </div>
        </div>
         <!-- end video background -->
            <!--start of banner -->
         <div class="container-fluid bg-danger txt-banner">
           <div class="row bottom-banner">
             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fas fa-book-open mr-3"></i>
                 100+ online courses
               </h5>
             </div>
             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fas fa-users mr-3"></i>
                 Experts Instructors
               </h5>
             </div>

             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fas fa-keyboard mr-3"></i>
                 life time access
               </h5>
             </div>

             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fas fa-rupee-sign mr-3"></i>
                 money back guranty
               </h5>
             </div>
           </div>
         </div>
    
       <!--end of banner -->

      

<!--start of most popular course -->
<div class="container mt-5">
          <h1 class="text-center">Popular Courses</h1>
</div>
<!--end of most popular course -->
  <!--start of most popular course 1st card deck -->
  <?php
  
  
  ?>
          
          <div class="row">
    

  <?php 
  $sql="SELECT * from course LIMIT 3";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $course_id=$row['course_id'];
      echo '  <div class="col-4">
      <div class="card">
      <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$row['course_name'].'</h5>
      <p class="card-text">'.$row['course_desc'].'</p>';
      
                
                if(isset($_SESSION['is_login'])){  
               echo ' <a class="btn btn-primary text-white font-weight-bolder float-right" href="/web_project/coursedetails.php?course_id='.$course_id.'">ENROLL</a>  
    </div>
  </div>
      </div> 
                ';
                }
                else{
                  echo ' <a class="btn btn-primary text-white font-weight-bolder float-right" href="/web_project/coursedetails1.php?course_id='.$course_id.'">ENROLL</a>  
                  </div>
                </div>
                    </div> 
                              ';
                }
    }
  }
  
  ?>
 </div>
    
    
  
<br>
<br>
<br>

  <!-- card row 2 -->
            
  <div class="row">
    

    <?php 
    $sql="SELECT * from course LIMIT 3,3";
    $result=$conn->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $course_id=$row['course_id'];
        echo '  <div class="col-4">
        <div class="card">
        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>';

                    if(isset($_SESSION['is_login'])){  
               echo ' <a class="btn btn-primary text-white font-weight-bolder float-right" href="/web_project/coursedetails.php?course_id='.$course_id.'">ENROLL</a>  
    </div>
  </div>
      </div> 
                ';
                }
                else{
                  echo ' <a class="btn btn-primary text-white font-weight-bolder float-right" href="/web_project/coursedetails1.php?course_id='.$course_id.'">ENROLL</a>  
                  </div>
                </div>
                    </div> 
                              ';
                }
      }
    }
    
    ?>
   </div>
      
      
    
    <div class="text-center m-2">
<a class="btn btn-danger btn-sm" href="courses1.php">VIEW ALL COURSES</a>
    </div>
</div>
<!-- end of courses -->

<!-- contact us form         -->
<div class="second" id="second">
<?php
include('./contact.php')
?>
</div>


<br>
<!-- stric ratings-->
<?php
include('./rating.php')
?>

<!-- start of banner -->

<div class="container-fluid bg-danger txt-banner">
           <div class="row bottom-banner">
             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fa-brands fa-facebook"></i>
                 facebook
               </h5>
             </div>
             <div class="col-sm">
               <h5>
                 <i style="color:yellow;" class="fa-brands fa-whatsapp"></i>
                 whatsapp
               </h5>
             </div>
            

             <div class="col-sm">
               <h5>
               <i style="color:yellow;" class="fa-brands fa-youtube"></i>
                 youtube
               </h5>
             </div>
           </div>
         </div>
    
       <!--end of banner -->
       <!--start of about section -->  

<div class="container-fluid p-4" style="background-color:#E9ECEF">
<div class="container" style="background-color:#E9ECEF">
<div class="row text-center">
  <div class="col-sm">
    <h5> About Us</h5>
    <p>
      JMScool provides universal access to worlds best education
       partnering with top universities and organizations to offer courses online
    </p>
  </div>
  <div class="col-sm">
    <h5>Catagory</h5>
    <a class="text-dark" href="" >Web Development</a><br/>
    <a class="text-dark" href="" >Web Designing</a><br/>
    <a class="text-dark" href="" >Android App Development</a><br/>
    <a class="text-dark" href="" >iOS Development</a><br/>
    <a class="text-dark" href="" >Data Analysis</a><br/>
  </div>
  <div class="col-sm">
    <h5>Contact Us</h5>
    <p>JMSchool Pvt Ltd <br>Hytabad Phase 5<br>Peshawar<br>JIYA.034534434343<br>MINA.03345454545</p>
  </div>
</div>
</div>
</div>
    <!--end of about section --> 
    <?php
include('./maininclude/footer.php');
?>


    