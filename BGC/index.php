<?php  
include 'rootpath.php';
include (ROOT_PATH."/app/reg.php") ;
include (ROOT_PATH."/app/includes/header.php") ;

?>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-4 mx-auto my-5">
                <div>
                    <h5 class="text-center text-dark">Register</h5>
                    <form method="POST" action="index.php" class="form-group">
                  

                    <div>
                      <label for="username">Username</label>
                      <p class="my-3"><input type="text" name='username' class="form-control"></p>
                    </div>
                    <div>
                      <label for="email">Email</label>
                      <p class="my-3"><input type="email" name="email" class="form-control"></p>
                    </div>
                      <div>
                      <label for="password">Password</label>
                     <p class="my-3"> <input type="password" name="password" class="form-control"></p>
                     </div>
                      <div >
                      <label for="con_password">Confirm Password</label>
                     <p class="my-3"> <input type="password" name="con_password" class="form-control"></p>
                      </div> 
                      <div class="text-center">
                      <button class="btn btn-success btn-md" type="submit" name="submit">Register</button>
                       </div>
                  </form> 
                  <P class="tex-center">Aready have an account??<a href="login.php">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>