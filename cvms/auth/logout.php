<?php 

    session_start();
    // if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == 1){
        session_destroy();
    // }
    header('location: login.php');

?>