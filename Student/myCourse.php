<?php
if(!isset($_SESSION)){
    session_start();
}

//include('../dbConnection.php');
include('../dbConnection.php');
$stuLogEmail=$_SESSION['stuLogEmail'];
$sql="SELECT co.id,c.course_id,c.course_name,c.course_duration,c.course_desc,c.course_img,c.course_author FROM my as co join course as c on co.course_id=c.course_id where co.stu_email='$stuLogEmail'";
$result=$conn->query($sql);
//$sql="select co.id,c.course_id,c.course_name,c.course_duration,
//c.course_desc,c.course_img,c.course_author from my as co join course as c on c.course_id=co.course_id where co.etu_email='$stuLogEmail'";
?>
   <img src="../images/course.jpeg" alt="courses" style="height:400px;width:100%;object-fit:cover;box-shadow:10px;"/>


<div class="container mt-1 ml-3">
    <div class="row">
        <div class="jumbotron">
            <h4 class="text-center">My Courses</h4>
            <?php
            if(isset($stuLogEmail)){
             
               
                if(isset($stuLogEmail)){
                    while($row=$result->fetch_assoc()){?>
                        <div class="bg-light mb-3">
                        <h5 class="card-header">
                            <?php echo $row['course_name'];?>
                        </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?php echo $row['course_img']; ?>" class="card-img-top mt-4" >

                    </div>
                <div class="col-sm-6 mb-3">
                    <div class="card-body">
                        <p class="card-title">
                            <?php echo $row['course_desc'];?>
                        </p>
                        <small class="card-text">Duration: <?php
                        echo $row['course_duration'];?></small>
                        <br/>
<small class="card-text"> InstructionL <?php echo $row['course_author'];?></small><br/>
                    </p>
                    <a href="watchcourse.php?course_id=<?php echo $row['course_id']?>"
                    class="btn btn-primary mt-5 float-right">Watch Course</a>
                    <br><br>
                    <a class="btn btn-danger" href="../index.php">Cancel</a>
                                    </div>
            
                </div>
                </div>
                    </div><?php
                    }
                }
            }
            ?><hr/>
        </div>
    </div>
</div>
        </div>
        <?php
        include('../maininclude/footer1.php')
        ?>