<?php
$localhost = "localhost";
$root = "root";
$password = "";
$dbname= "contact_form";

$conn = new mysqli($localhost,$root,$password,$dbname);
if(mysqli_connect_error()){
    die("connection failed". $conn-> mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $email= trim($_POST['email']);
    $password =trim($_POST['password']);

$sql = "INSERT INTO users(name,email,password) Values(?,?,?)";
$stmt = $conn-> prepare($sql);
$stmt->bind_param('sss',$name,$email,$password);
$stmt->execute();
header("location:connect.php?datasentsuccessfully");
exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connect.php" method="post">
        <input type="text" name="name" placeholder="first name"/>
        <input type="email" name="email" placeholder="email" />
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>