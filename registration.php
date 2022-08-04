<html>
<script type="text/javascript" src="validiateEmail.js">
      <script type="text/javascript" src="js/ajaxrequest.js"> </script>
    
    </script>
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="stuRegForm">
  <div class="form-group">
  <i class="fas fa-user"></i>  
  <label for="stuname" class="pl-2 font-weight-bold">Name</label>
    <input type="text" class="form-control" placeholder="name" name="stuname" id="stuname">
      </div>

      <div class="form-group">
        <i class="fas fa-envelope"></i>
    <label for="stuemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="email" onkeyup="ValidateEmail();">
    <span id="lblError" style="color: rgb(89, 0, 255)"></span>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>



  <div class="form-group">
   <i class="fas fa-key"></i> <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
    <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
      </div>
    </div>
  </div>
</div>
</html>











