<?php session_start();
      $_SESSION["modal"]="addpost"; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css\modal.css">
</head>
<body>
<div class="modal fade" id="newPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content " >
    <?php $modal = "addPost" ?>
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add post</h3>
      </div>
      <div class="modal-body ">
        <form  id="addPostform" method="POST" action="http://localhost/prototype/database/db_connect.php">
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
        <input type="file" name="postImage" class="addpost-in" value="image" >
        <textarea class="addpost-in" rows=12 placeholder="Description" names="description"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="addPostform" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>
