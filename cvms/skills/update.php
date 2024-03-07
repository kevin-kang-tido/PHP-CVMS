<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FORM SUBMIT
    $id = $_POST['id'];
    $name = $_POST['skill_name'];
    $type = $_POST['type'];
    $people_id = $_POST['people_id'];
    $sql = "UPDATE skills 
        SET `name` = '$name', 
        `type` = '$type'
         WHERE id = $id";
    $db->query($sql);

    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php?cv_id='.$people_id);
?>