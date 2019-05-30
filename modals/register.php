<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header" style="background: #242424; border: 2px solid #242424;">
        <h3 class="modal-title" id="exampleModalLabel">Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" id="close">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form id="register-form" method="POST" action="http://localhost/prototype/database/db_connect.php">
        <input type="hidden" name="form" value="register">
        <input class="register-in" type="text" name="regNo" placeholder="Registrartion Num" maxlength="8" id="regNo" required >
        <input class="register-in" type="text" name="name" placeholder="Full name" maxlength="15" id="name" required >
        <input class="register-in" type="email" name="email" placeholder="example@gmail.com"  id="email" required >
        <input class="register-in" type="date" name="DOB"  id="DOB"  required>
        <input class="register-in" type="text" name="mobileNo"  id="mobileNo" placeholder="mobile Number" required>
        <textarea class="register-in" type="address" name="address"  id="address" placeholder="Address" required></textarea>
        </form>
      </div>
      <div class="modal-footer" style="background: #242424; border: 2px solid #242424;">
        <button type="submit" form="register-form" class="btn btn-primary" id="signin-btn">Register</button>
      </div>
    </div>
  </div>
</div>
