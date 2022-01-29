<?php

if(isset($_POST['submit'])){
    $name=   htmlspecialchars(trim($_POST['name']));
    $email= htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message= htmlspecialchars(trim($_POST['message']));



    $from = 'samuelnderitu495@gmail.com';
    $header = "From : ".$email;
    $message = "You have receive a message from ".$name ."\n\n". "The message is: ".$message;


 //from -> the actual email where the email is sent to
 //subject-> the subject of the email
 //message-> the message of the email sent
 //header-> the header of the email;

 if(mail($from,$subject,$message,$header) === true){
     header("location:index.php?emailsentsuccessfully");
     exit();
 }else{
     header("location:index.php?emailnotsent");
     exit();
 }


}














?>
