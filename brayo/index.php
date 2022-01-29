<?php include "server.php" ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href='assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/style.css'>
    <title>MOTOR COMPANY</title>
</head>
<body class="bg-primary">
    <div class="header">
    <h1 class="text-center"> Register</h1>
    </div>
    <section>
    <div class="container bg-muted">
        <div class="row">
            <div class="col-md-5 mx-auto my-5">
                <div>
                    
                    <form action="index.php" method="POST" class="form-group text-dark">
    <?php include "error.php"?>
    Username :<br><input type="text" name="username" class="form-controls"><br>
    Email: <br><input type="email" name='email'  class="form-controls"><br>
  
    Password:<br><input type="password" name="password_1"  class="form-controls"><br>
    Confirm Password:<br><input type="password" name="password_2"  class="form-controls"><br>
    <input type="submit" value="register" name="register"  class="form-controls btn btn-lg btn-success">
    <p>
    Already a member? <a href="login.php">Sign in</a>
    </p>
    </form>
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

