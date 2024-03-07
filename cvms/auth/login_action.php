<?php 
    session_start();
    include_once('../connection.php'); // db
    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        /* check if user exist in database */
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' 
                AND `password` = '$password'";
        $user = $db->query($sql)->fetch_object();
        if($user->username == $username && $user->password == $password){
            $_SESSION['is_login'] = 1;
            $_SESSION['name'] = $user->name;
            $_SESSION['welcome'] = 'Welcome '.$user->name;
            header('location: ../index.php');
        }else{
            $_SESSION['error'] = 'Invalid username or password!';
            header('location: login.php');
        }

    }else{
        $_SESSION['error'] = 'Please login!';
        header('location: login.php');
    }
    

?>