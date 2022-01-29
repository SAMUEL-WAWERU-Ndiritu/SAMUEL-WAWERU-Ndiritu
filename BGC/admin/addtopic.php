<?php
require_once '../rootpath.php';
include (ROOT_PATH.'/admin/create/connect.php') ;
include (ROOT_PATH.'/admin/create/includes/header.php');
include (ROOT_PATH.'/admin/create/includes/navbar.php');
include (ROOT_PATH.'/admin/create/topic.php');
;
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
                    <button type="button" class="btn btn-lg btn-success"><a href="addtopic.php" class="text-white">Add Topic</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="managetopic.php" class="text-white">Manage Topics</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Add Topic</h3>
                    <div class="mx-2">
                    <form method="POST" action="addtopic.php" class="form-group">

<div>
  <label for="name">Name</label>
  <p class="my-3"><input type="text" id="name" name='name' class="form-control"></p>
</div>
<div>
  <label for="description">Description</label>
  <textarea id="description" name="description" cols="2" rows="3" class="form-control"></textarea>
</div>
 
  <div class="text-center py-5">
  <button class="btn btn-success btn-md" type="submit" name="submit">Add Topic</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include (ROOT_PATH.'/admin/create/includes/footer.php');
?>