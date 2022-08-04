<!--start of footer -->
<footer class="container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2022 || Designed by Javairia AND Mina || FAST Univeristy ||  <a onclick="location.href = 'login1.php';"   id="admin">ADMIN</a>  </small>
    </footer>
    <!--end of footer -->
<!-- start of registration form -->
<link rel="stylesheet" href="../css/bootstrap.min.css"></link>
         <link rel="stylesheet" href="../css/all.min.css"></link>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <!-- fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Macondo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css"></link>  
<?php
include('../registration.php')
?>
<script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>
         <!-- ajex -->
        <script type="text/javascript" src="../js/ajaxrequest.js"> </script>
        <script type="text/javascript" src="../js/adminajaxrequest.js"> </script>
        <script src="../js/all.min.js"> </script>
        <!-- ending scripts -->

<!-- end of registration form -->
<!-- start of login form -->
<?php
include('../login.php')
?>
<!--end of login form -->
<?php
include('../admin.php')
?>




    </body>
</html>