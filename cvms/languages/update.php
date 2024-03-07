<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FORM SUBMIT
    $id = $_POST['id'];
    $name = $_POST['name'];
    $level = $_POST['level'];
    $people_id = $_POST['people_id'];
    $low = 0 ;
    $medium = 0;
    $good = 0;
    if($level ==1){
        $low = 1;
    }elseif($level == 2){
        $medium=1;
    }else{
        $good=1;
    }
    $sql = "UPDATE `languages` SET 
    `name`='$name',
    `low`='$low',
    `medium`='$medium',
    `good`='$good'
     WHERE id = $id";

    $db->query($sql);

    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php?cv_id='.$people_id);
?>