<?php
session_start();
 include (ROOT_PATH."/app/reg.php");?>
<header>

  <div class="container-fluid">
  <div class="logo">
          <h1 class="logo-text"><span>Think</span>Big</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
          <li><a href="<?php echo BASE_URL."/home.php"?>">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="index.php">Sign Up</a></li>
          <li><a href="login.php">Login</a></li> 
          
          <li>
            <a href="#">
              <i class="fa fa-user"></i>    
           <?php echo $_SESSION['username'];?>
              <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
<ul>
              
              <li><a href="<?php echo BASE_URL."/logout.php"?>" class="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
  </div>  
      </header>
