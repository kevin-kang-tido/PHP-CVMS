<?php 
    session_start();
    include_once('../connection.php');

    $id = $_GET['id'];
    
    $cv_sql ="SELECT * FROM people WHERE id = $id";
    $cv = $db->query($cv_sql)->fetch_object();
    $people_id = $cv->people_id;


    $sql = "DELETE FROM people WHERE id = $id";
    $db->query($sql);

    
    $_SESSION['success'] = "Deleted successfully.";
    header('location: index.php?cv_id='.$people_id);
?>