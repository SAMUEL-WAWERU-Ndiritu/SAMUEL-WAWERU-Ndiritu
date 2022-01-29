<?php

include 'connect.php';
    $username= "";
    $email= "";
    $password= "";
    $con_password= "";
    $errors= array();


    if(isset($_POST["submit"])){
    $username= trim($_POST['username']);
    $email= trim($_POST['email']);
    $password= trim($_POST['password']);
    $con_password= trim($_POST['con_password']);


    

    if(empty($username) || empty($email) || empty($password) || empty($con_password)){
        header('location:index.php?error=emptyfields');
        array_push($errors,'Kindly input all the fields');
        exit();
    }elseif(preg_match($username,'/*[a-zA-Z0-9]*/')){
        
        header('location:index.php?error=checkyourmatch');
        array_push($errors,"Password don't match");
        exit();
    }elseif($password !== $con_password){
        
        header("location:index.php?error=passworddon'tmatch");
        array_push($errors,"password don't match");
        exit();
    }else{
        if(count($errors)==0){
        $sql= "INSERT INTO users(username,email,password)VALUES(?,?,?)";
        $stmt= $conn->prepare($sql);
        $hash_pass= password_hash($password,PASSWORD_DEFAULT);
        $stmt->bind_param('sss',$username,$email,$hash_pass);
        $stmt->execute();
        session_start();
        $_SESSION['username']= $username;
        header('location:home.php?success=registrationsucessfully');
        }
       
       
        

    }
}


