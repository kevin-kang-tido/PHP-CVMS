<?php 
    session_start();
    include_once('../connection.php');

    $id = $_GET['id'];
    // retrieve people id befor delete
    $cv_sql ="SELECT * FROM experiences WHERE id = $id";
    $cv = $db->query($cv_sql)->fetch_object();
    $people_id = $cv->people_id;


    $sql = "DELETE FROM experiences WHERE id = $id";
    $db->query($sql);

    
    $_SESSION['success'] = "Deleted successfully.";
    header('location: index.php?cv_id='.$people_id);
?>