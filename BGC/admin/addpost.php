<?php
require_once '../rootpath.php';
include (ROOT_PATH.'/admin/create/connect.php') ;
include (ROOT_PATH.'/admin/create/includes/header.php');
include (ROOT_PATH.'/admin/create/includes/navbar.php');
include (ROOT_PATH.'/admin/create/post.php');


?>



    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4   admin" >
                <div class="text-left  p-2 my-4 ">
                    <a href="managepost.php" class="text-white">Manage Posts</a>
                </div >
                <div class="text-left  p-2 my-4">
                    <a href="manageuser.php" class="text-white">Manage user</a>
                </div>
                <div class="text-left  p-2 my-4">
                    <a href="managetopic.php" class="text-white">Manage Topic</a>
                </div>
            </div>
            
            <div class="col-md-8 m-auto">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="addpost.php" class="text-white">Add Post</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="managepost.php" class="text-white">Manage Post</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Post</h3>
                    <div class="mx-2">
                    <form method="POST" action="addpost.php" class="form-group">
                 
<div>
  <label for="title">Title</label>
  <p class="my-3"><input type="text" name='title' class="form-control"></p>
</div>
<div>
  <label for="body">Body</label>
  <p class="my-3"><input type="text" name="body" class="form-control"></p>
</div>
<div>
  <label for="image">Image</label>
  <p class="my-3"><input type="file" name="image" class="form-control"></p>
</div>
 <div>
  <label for="topic">Role</label>
  <select from="topic" name="topic" id="topic" class="form-control">
      <option value="Poetry">Poetry</option>
      <option value="life_lessons">Life Lessons</option>
  </select>
  </div> 
  <div class="text-center my-5">
  <button class="btn btn-success btn-md" type="submit" name="submit">Add User</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php include (ROOT_PATH.'/admin/create/includes/footer.php');
?>