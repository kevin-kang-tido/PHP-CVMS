<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FROM SUBMIT
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users`(`name`, `username`, `password`) 
            VALUES ('$name','$username','$password')";

    $db->query($sql);

    $_SESSION['success'] = "Insert successfully.";
    header('location: index.php');
?>