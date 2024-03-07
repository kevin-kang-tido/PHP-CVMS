<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FROM SUBMIT
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


    $sql = "INSERT INTO `languages`( `name`, `low`, `medium`, `good`, `people_id`) 
    VALUES ('$name','$low','$medium','$good','$people_id')";

 


    // $sql = "INSERT INTO `languages`(`name`) 
    //         VALUES ('$name')";

    $db->query($sql);

    $_SESSION['success'] = "Insert successfully.";
    header('location: index.php?cv_id='.$people_id);
?>