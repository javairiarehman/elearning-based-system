



</html>

<?php
include('./maininclude/header.php');


include('dbConnection.php');







if(isset($_REQUEST['login']))
{
if (isset($_POST['username']) && isset($_POST['password'])) {
  session_start(); 

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                

                $_SESSION['id'] = $row['id'];

                header("Location: admin/dashboard.php");

                

            }else{

              $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">incorrect email or password</div>';

                

            }

        }else{

          $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">incorrect email or password</div>';

            

        }

    }

}else{

  $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">incorrect email or password</div>';

  

}
}

?>



 <!-- start video background -->
 <div class="container-fluid remove-vid-marg">
            <div class="vid-parent">
                <video playsinline autoplay muted loop>
                    <source src="video/login1.mp4" >
                </video>
                <div class="vid-overlay"></div>
                 

            </div>
            <div class="vid-content">
            <h1  >Admin Login Form</h1>
            <br>
            

            <form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div><br>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <br>
  <button type="submit" name="login" value="login">Log In</button>
  <a class="btn btn-danger" href="index.php">Cancel</a>
  <?php if(isset($msg)) 
           echo $msg;  ?>
</form>
            </div>
        </div>
         <!-- end video background -->
        



<br>
<?php
include('./maininclude/footer.php');
?>
-- end navigation  -->
        <!-- including scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
         <!-- ajex -->
        <script type="text/javascript" src="js/ajaxrequest.js"> </script>
        <script type="text/javascript" src="js/adminajaxrequest.js"> </script>
        <script src="js/all.min.js"> </script>
        <!-- ending scripts -->

<!--end of login form -->



