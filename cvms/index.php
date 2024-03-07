<?php 
     include_once('layouts/header.php');
     include_once('connection.php');
     if(isset($_SESSION['welcome'])){
        echo '<h3>'.$_SESSION['welcome'].'</h1>';
        unset($_SESSION['welcome']);
     }
?>

