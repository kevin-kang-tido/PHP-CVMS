<?php 
    session_start();
    include_once('../connection.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $db->query($sql);

    $_SESSION['success'] = "Deleted successfully.";
    header('location: index.php');
    
?>