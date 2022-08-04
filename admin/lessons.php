<?php
include('./admininclude/header.php');
include('../dbConnection.php');
?>
<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course ID:</label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <br>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>
</div>


<?php
$sql="SELECT course_id FROM course";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid']==$row['course_id']){
        $sql="SELECT * from course where course_id={$_REQUEST['checkid']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if(($row['course_id'])==$_REQUEST['checkid']){
            $_SESSION['course_id']=$row['course_id'];
            $_SESSION['course_name']=$row['course_name'];
            ?>
            <h3 class="mt-5 bg-dark text-white p-2">Course ID:
                <?php if(isset($row['course_id']))
                {
                    echo $row['course_id'];}
                    ?>
                    Course Name:
                    <?php if(isset($row['course_name'])){
                        echo $row['course_name'];
                    } ?>
            </h3>
<?php

$sql="select * from lesson where course_id={$_REQUEST['checkid']}";

$result=$conn->query($sql);
echo '<table class="table">
<thead>
<tr>
<th> Lesson ID</th>
<th> Lesson Name</th>
<th> Lesson Link</th>
<th>Action</th>
</tr></thead><tbody>
';
while($row=$result->fetch_assoc()){
    echo '<tr>';
    echo '<th scope="row">'.$row["lesson_id"].'</th>';
    echo '<td>'.$row["lesson_name"].'</td>';
    echo '<td>'.$row["lesson_link"].'</td>';
    echo '<td><form action="" method="POST" class="d-inline"><input
     type="hidden" name="id" value='.$row["lesson_id"].'>
     <button type="submit" class="btn btn-secondary" name="delete" value="delete">DELETE</button></form></td></tr>';
}
echo '
</tbody>

</table>';






        }

        
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    }else{
        echo "unable to delete";

    }
}


    }
}
?>





<div>
    <a class="btn btn-danger box" href="./addLesson.php">Add Lesson</a>
</div>

<?php
include('./admininclude/footer.php');
?>