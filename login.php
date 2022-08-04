<!-- start of login form -->
<script type="text/javascript" src="js/ajaxrequest.js"> </script>
<html>

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- form -->
      
      <form id="stuLoginForm">
  

      <div class="form-group">
        <i class="fas fa-envelope"></i>
    <label for="stuLogemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="email">
    

  <div class="form-group">
   <i class="fas fa-key"></i> <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
  </div>
  <?php
            if(isset($msg)) 
           echo $msg; ?>
</form>
<!-- end of login -->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"> </small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Log In</button>
        
        <button onclick="location.href = 'login1.php';" type="button"  class="btn btn-primary"  id="admin">ADMIN</button>
      </div>
    </div>
  </div>
</div>

<!-- end of login form -->








</html>


