
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header" style="background: #242424; border: 2px solid #242424;">
        <h3 class="modal-title" id="exampleModalLabel">Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" id="close">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form id="signin-form" method="POST" action="http://localhost/prototype/database/db_connect.php">
          <input type="hidden" name="form" value="login">
        <input class="signin-in" type="text" name="regNo" placeholder="Registrartion Num" maxlength="8" id="regNo" required >
        <input class="signin-in" type="password" name="password" placeholder="Password" maxlength="30" id="passw" required >
        </form>
      </div>
      <div class="modal-footer" style="background: #242424; border: 2px solid #242424;">
        <button type="button" data-toggle="modal" data-target="#register" class="btn btn-primary" id="signin-btn" style="position: relative;right:68%;">Sign up</button>
        <button type="submit" form="signin-form" class="btn btn-primary" id="signin-btn">Login</button>
      </div>
    </div>
  </div>
</div>
