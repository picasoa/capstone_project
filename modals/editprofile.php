<div class="modal fade" id="EditProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style=" max-width:  800px">
    <div class="modal-content " >
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit profile</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" id="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editProfileForm" method="POST" action="database/db_connect.php" enctype="multipart/form-data"  >
            <input type="hidden" name="form" value="edit">
            <div class="wrapper">
                <img class="edit-tag"  id="proPic" height="200" width="200">
                <div class="choose">
                    <input type="file" name="proPic"  id="proPicin" value="<?php echo $_SESSION["proData"]["propic"]; ?>">
                    <div class="fakein" ><button class="fkbtn" >choose an image</button>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <img class="edit-tag"  id="cvrPic" height="200" width="200">
                <div class="choose">
                    <input type="file" name="coverPic" id="cvrPicin" value="<?php echo $_SESSION["proData"]["coverpic"]; ?>">
                    <div class="fakein" ><button class="fkbtn">choose an image</button>
                    </div>
                </div>
            </div>
            
            <div>
                <h4 id="userName" class="edit-tag">User name</h4>
                <input type="text" name="userName" maxlength="20" class="edit-in" placeholder="Rajat silwal" value="<?php echo $_SESSION["proData"]["Name"]; ?>">
            </div>
            
            <div>
                <h4 class="edit-tag">Date of birth</h4>
                <input class="edit-in" type="date" name="dateOfBirth" placeholder="DD-MM-YYYY" value="<?php echo $_SESSION["proData"]["DOB"]; ?>">
            </div>
            
            <div>
                <h4 class="edit-tag">E-mail</h4>
                <input class="edit-in" type="emial" name="email" placeholder="example@gmail.com" value="<?php echo $_SESSION["proData"]["email"]; ?>">
            </div>
            
            <div>
                <h4 class="edit-tag">Phone Number</h4>
                <input class="edit-in" type="text" name="phoneNumber" maxlength="10"  placeholder="+91-8195085599" value="<?php echo $_SESSION["proData"]["mobileNo"]; ?>">
            </div>
            
            <div><h4 class="edit-tag" id="address">Address</h4>
            <textarea id="addressin" class="edit-in" rows="5" name="address"><?php echo $_SESSION["proData"]["address"]; ?></textarea></div>
            <div>
            <h4 class="edit-tag">Languages</h4>
            <input class="edit-in" type="text" name="languages" placeholder="Hindi,English,Malayalam" value="<?php echo $_SESSION["proData"]["languages"]; ?>"></div>
            <div>
            <h4 class="edit-tag">Skills</h4>
            <input class="edit-in" type="text" name="skills" placeholder="Adobe" value="<?php echo $_SESSION["proData"]["skills"]; ?>"></div>
            <div>
              
            <h4 class="edit-tag" id="socialMedia">Social media links</h4>
            <input class="edit-in" type="url" name="facebook" placeholder="facebook" value="<?php  echo $facebook ?>">
            <input class="edit-in" type="url" name="instagram" placeholder="instagram" value="<?php echo $instagram ?>">
            <input class="edit-in" type="url" name="twitter" placeholder="twitter" value="<?php echo $twitter ?>">
            <input class="edit-in" type="url" name="pinterest" placeholder="pinterest" value="<?php echo $pinterest ?>">
            <input class="edit-in" type="url" name="linkedin" placeholder="linkedin" value="<?php echo $linkedin ?>">

            </div>
            <div><h4 class="edit-tag" id="advice">Advice</h4><textarea id="advicein" name="advice" class="edit-in" rows=4><?php echo $_SESSION["proData"]["advice"]; ?></textarea></div>            
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="editProfileForm" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>