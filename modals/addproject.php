<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style=" max-width:  800px">
    <div class="modal-content " >
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Project</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" id="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addpro" method="POST" action="database/db_connect.php" enctype="multipart/form-data">
            <input type="hidden" name="form" value="addpro">
             <div><h4>project1</h4>     
            <input class="edit-in" type="text" name="head1" required="fill in the space" placeholder="title">
            <input class="edit-in" type="file" name="img1" required > 
            <textarea class="edit-in" type="text" name="des1" required placeholder="description"></textarea>
             </div>
            <div>
            <h4>project2</h4>
            <input class="edit-in" type="text" name="head2" placeholder="title">
            <input class="edit-in" type="file" name="img2" >
            <textarea class="edit-in" type="text" name="des2" placeholder="description" ></textarea> 
</div>

          </form>
             </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="addpro" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>