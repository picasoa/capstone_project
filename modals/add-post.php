<?php 
  $_SESSION["form"]="profile";
?>
<div class="modal fade" id="newPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content " >
    <?php $modal = "addPost" ?>
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add post</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" id="close">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form  id="addPostform" method="POST" action="database/db_connect.php" enctype="multipart/form-data">
          <input type="hidden" name="form" value ="add">
        <input class="addpost-in" type="text" name="Title" placeholder="Post title" required>
        <select class="addpost-in" name="category">
          <option selected="selected" style="color: #424242;">Category</option>
          <option>Personal Style</option>
          <option>News</option>
          <option>Shopping</option>
          <option>Life style</option>
          <option>Photography</option>
          <option>Editorial</option>
          <option>Beauty</option>
        </select>
            <div class="choose"><input type="file" name="postImage" id="coverPicin"><div class="fakein" ><button class="fkbtn">choose an image</button></div></div>
        <textarea class="addpost-in" rows=12 placeholder="Description" name="description"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="addPostform" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>

