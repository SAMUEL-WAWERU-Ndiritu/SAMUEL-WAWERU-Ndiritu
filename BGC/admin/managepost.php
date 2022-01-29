<?php
require_once '../rootpath.php';
include (ROOT_PATH.'/admin/create/connect.php') ;
include (ROOT_PATH.'/admin/create/includes/header.php');
include (ROOT_PATH.'/admin/create/includes/navbar.php');

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
            
            <div class="col-md-8">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="addpost.php" class="text-white">Add Post</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="managepost.php" class="text-white">Manage Posts</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Posts</h3>
                    <div class="mx-2">
                        <div class="table-responsive">
                            <table class="table table-border">
                            <?php
                        $sql= "SELECT * FROM posts";
                        $stmt=$conn->prepare($sql);
                         $stmt->execute();
                      
                           ?>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['title']?></td>
                                        <td>Author</td>
                                        <td><a href="create/delete.php?action=deleted&id=<?php echo $rows['id']?>">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:managepost.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               

                            </table>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include (ROOT_PATH.'/admin/create/includes/footer.php');
?>
