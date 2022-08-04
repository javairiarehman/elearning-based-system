<?php
include('./maininclude/header.php');
include('./dbConnection.php');
?>


<div class="container-fluid bg-dark">

<div class="row">
    <img src="./images/course.jpeg" alt="courses" style="height:500px;width:100%;object-fit:cover;box-shadow:10px;"/>
</div>
</div>


<!--starting content -->

<div class="container mt-5">
    <?php
    if(isset($_GET['course_id'])){
        $course_id=$_GET['course_id'];
        $sql="SELECT * FROM COURSE WHERE course_id='$course_id'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
    
    ?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo str_replace('..','.',$row['course_img']) ?>" class="card-img-top" alt="flutter"/>
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Course Name:<?php
            echo $row['course_name']
            ?></h5>
<br>
<p class="card-text"> Description :
<?php
            echo $row['course_desc']
            ?>
</p>
<p class="card-text">Duration:
<?php
            echo $row['course_duration']
            ?>
</p>
<form action="checkout.php?course_id" method="post">
  
<button class="btn btn-primary text-white font-weight-bolder float-right" name="buy" type="submit">Get Started</button>

</form>
</div>
<br>
        </div></div>
    </div>
    <div class="container">
        <div class="row">

       
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">lesson NO</th>
                        <th scope="col">lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
        $sql="select * from lesson";
        $result=$conn->query($sql);
        if($result->num_rows >0)
        {
            $num=0;
            while($row=$result->fetch_assoc()){
                if($course_id==$row['course_id']){
                    $num++;
              echo '  <tr>
                <th scope="row">'.$num.'</th>
                <td>'.$row['lesson_name'].'</td>
            </tr>';}
            }
        }
        ?>

                </tbody>
            </table>

        </div>
    </div>


    <?php
include('./maininclude/footer.php');
?>