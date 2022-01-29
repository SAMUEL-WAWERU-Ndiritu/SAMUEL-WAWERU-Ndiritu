<?php
require_once 'rootpath.php';
require_once 'connect.php';

$name= "";
$password = "";
$errors = array();
if(isset($_POST['submit'])){
   $name= trim($_POST['username']);
   $password = trim($_POST["password"]);

   if(empty($name) || empty($password)){
      array_push($errors,"Empty fields");
      header("location:login.php?error=emptyfields");
      
       exit();
   }else{
       $sql = "SELECT * FROM users WHERE username=?";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:login.php?error=sqlerror");
        array_push($errors,"SQL error");
        exit();
       }else{
          mysqli_stmt_bind_param($stmt,"s",$name);
          mysqli_stmt_execute($stmt);
          $result=mysqli_stmt_get_result($stmt);
          if($row= mysqli_fetch_assoc($result)){
             $comparePass= password_verify($password,$row["password"]);
             if($comparePass==false){
                header("location:login.php?error=wrongpassword");
                array_push($errors,"Password don't match");
                exit();
             }elseif($comparePass==true){
                if(count($errors)==0){
                   session_start();
                   $_SESSION["id"] = $row['id'];
                   $_SESSION["username"]= $row["username"];
                   if($name=='admin'){
                     header("location:admin/adduser.php?loginsuccessfuly");
                     
                   }else{
                     header("location:home.php?loginsuccessfully");
                   exit();
                   }
                  }
             }else{
                header("location:login.php?error=wrongpassword");
                array_push($errors,"Password don't match");
                exit();
             }
          }else{
            header("location:login.php?error=namedoesnotexist");
            array_push($errors,"Name don't exist");
            exit();
          }

       }
   }



}



?>