
<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $title= trim($_POST['title']);
    $body = trim($_POST['body']);
    $image =trim($_POST['image']);
    $topic= trim($_POST['topic']);


    if(empty($title) || empty($body)|| empty($image) || empty($topic) ){
        header('location:addtopic.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO posts(title,body,image,topic)VALUES(?,?,?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ssss',$title,$body,$image,$topic);
        $stmt->execute();
        header('location:managepost.php?PostAddedSuccessfuly');
        exit();
    }
}



?>