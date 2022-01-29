<?php

$localhost= 'localhost';
$root = 'root';
$password = '';
$dbname= 'school_big_project';

$conn= new mysqli($localhost,$root,$password,$dbname);
if(mysqli_connect_error()){
    die("Error in connection".$conn->mysqli_connect_error());
    exit();
}




?>