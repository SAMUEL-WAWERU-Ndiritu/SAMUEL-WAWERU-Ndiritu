<?php
if(isset($_POST['submit'])){

        require 'contactForm/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'samuelnderitu495@gmail.com';
        $mail->Password = '';

        $mail->setFrom($_POST['email']);
        $mail->addAddress('samuelnderitu495@gmail.com');
        $mail->addReplyTo($_POST['email']);

        $mail->isHTML(true);
        $mail->Subject = 'Respond to the following question: '.$_POST['message'];
        $mail->Body = '<h3><br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';

        if(!$mail->send()){
            $result = "Something went wrong! try again!";
        }else{
            $result = 'Successfull';
        }
    }
    ?>