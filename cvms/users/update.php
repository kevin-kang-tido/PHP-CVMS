<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FORM SUBMIT
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // var_dump($password);
    if($password != ''){
        $sql = "UPDATE `users` 
        SET `name` = '$name', 
        `username` = '$username', 
        `password` = '$password'
         WHERE id = $id";
    }else{
        $sql = "UPDATE `users` 
        SET `name` = '$name', 
        `username` = '$username'
         WHERE id = $id";
    }
   
    $db->query($sql);

    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php');
?>