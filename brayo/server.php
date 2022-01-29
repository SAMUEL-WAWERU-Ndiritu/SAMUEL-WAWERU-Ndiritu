

<?php
include 'connect.php' ;
 $username= "";
 $email = "";
 $errors= array();
 #connect with database
 
#if register is clicked
 if(isset($_POST['register'])){
     $username = $_POST["username"];
     $email = $_POST["email"];
     $password_1 = $_POST["password_1"]; 
     $password_2 = $_POST["password_2"];
 

 #ensure the filled are filled properly
 if(empty($username)){
     array_push($errors, "username is required");
 }

 if(empty($email)){
    array_push($errors, "email is required");
 }

if(empty($password_1)){
    array_push($errors, "password  is required");
}

if($password_1  != $password_2 ){
    array_push($errors, "The two password does    not match");
}

if (count($errors)==0){
    $password = md5($password_1);# encrpt password b4 submitting for security porposes
    $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    mysqli_query($conn,$sql);

    header('location: home.php');
}

} 

//login the user from the login page




 ?>