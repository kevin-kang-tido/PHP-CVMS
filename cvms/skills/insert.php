<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FROM SUBMIT
    $name = $_POST['skill_name'];
    $type = $_POST['type'];
    $people_id = $_POST['people_id'];

    $sql = "INSERT INTO `skills`(`name`, `type`, `people_id`) 
            VALUES ('$name','$type','$people_id')";
    $db->query($sql);

    $_SESSION['success'] = "Insert successfully.";
    header('location: index.php?cv_id='.$people_id);
?>