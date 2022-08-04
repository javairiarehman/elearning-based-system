<?php
include('./admininclude/header.php');
include('../dbConnection.php');
?>

<div class="col-sm-9 mt-5">

<p class="bg-dark text-white p-2">List of Students</p>
<?php 
$sql="SELECT * FROM student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        
      echo '<tr>';
           echo '<th scope="row">'.$row['stu_id'].'</th>';
            echo '<td scope="row">'.$row['stu_name'].'</td>';
           echo '<td scope="row">'.$row['stu_email'].'</td> ';
          echo ' <td> ';
             echo' 
             <form action="" method="POST" class="d-inlineS">
             <input type="hidden" name="id" value='.$row['stu_id'].'>
             <button 
                type="submit"
                class="btn btn-secondary"
                name="delete"
                value="delete">Delete</button> 
                </form>';

                
           echo '</td>';
       echo '</tr>';
         } ?>
    </tbody>
</table>
<?php
}
else echo "0 result";
 ?>
</div>

</div>


<?php
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    }else{
        echo "unable to delete";

    }
}

?>
<div>
    <a class="btn btn-danger box" href="./addStudent.php">ADD</a>
</div>
</div>
<?php
include('./admininclude/footer.php');
?>