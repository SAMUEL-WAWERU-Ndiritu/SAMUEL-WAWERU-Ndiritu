<?php 
include 'rootpath.php';
include (ROOT_PATH."/app/log.php") ;
include (ROOT_PATH."/app/includes/header.php") ;

?>
<section>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-5 mx-auto my-5">
                <div>
                    <h5 class="text-center text-dark">Login</h5>
                    <form method="POST" action="login.php" class="form-group">
                   <?php include (ROOT_PATH."/app/error.php");?>
                    <div>
                      <label for="username">Username</label>
                      <p class="my-3"><input type="text" name='username' class="form-control"></p>
                    </div>

                      <div>
                      <label for="password">Password</label>
                     <p class="my-3"> <input type="password" name="password" class="form-control"></p>
                     </div>
                      <div class="text-center">
                      <button class="btn btn-success btn-md" type="submit" name="submit">Register</button>
                       </div>
                  </form> 
                  <P class="tex-center">No account??<a href="index.php">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>