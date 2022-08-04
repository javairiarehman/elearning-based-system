<?php
include('./admininclude/header.php');
include('../dbConnection.php');
 

if(isset($_REQUEST['lessonSubmitBtn'])){
    if(($_REQUEST['lesson_name']=="") || ($_REQUEST['lesson_desc']=="")   ) {

    

    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
}

else{
    $lesson_name=$_REQUEST['lesson_name'];
    $lesson_desc=$_REQUEST['lesson_desc'];
    $course_id=$_REQUEST['course_id'];
    
    $lesson_link=$_FILES['lesson_link']['name'];

    $lesson_link_temp=$_FILES['lesson_link']['tmp_name'];
    $link_folder='../lessonvid/'.$lesson_link;
    move_uploaded_file($lesson_link_temp,$link_folder);

    


    $sql ="INSERT INTO lesson(lesson_name,lesson_desc,lesson_link,course_id) VALUES ('$lesson_name','$lesson_desc','$link_folder','$course_id')";
    if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Added Successfully</div>';
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Add</div>';
    }
}
}



?>
<div class="col-sm-6 mt-5 mx- jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">  Course ID</label>
            <input type="text" class="form-control" id="course_id"
            name="course_id" >
        </div>
        
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name"
            name="lesson_name">
        </div>

        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" row=2></textarea>

        </div>

        <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" id="lesson_link"
            name="lesson_link">
        </div>

        
        <div class="text-center">
            <button type="submit" class="btn btn-danger"
            id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="lessons.php" class="btn btn-secondary" >Close</a></div>
            <?php
           if(isset($msg)) 
           echo $msg; ?>

    </form>
</div>
</div>
</div>
<?php
include('./admininclude/footer.php');
?>