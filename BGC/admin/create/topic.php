<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $description = trim($_POST['description']);

    if(empty($name) || empty($description)){
        header('location:addtopic.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO topics(name,description)VALUES(?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ss',$name,$description);
        $stmt->execute();
        header('location:addtopic.php?topicAddedSuccessfuly');
        exit();
    }
}



?>