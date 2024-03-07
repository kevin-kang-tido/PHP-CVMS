<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FORM SUBMIT
    $id = $_POST['id'];
    $strat_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $position = $_POST['position'];
    $company_name = $_POST['company_name'];
    $people_id = $_POST['people_id'];

    $sql = "UPDATE `experiences` SET 
    `start_year`='$strat_year',
    `end_year`='$end_year',
    `position`='$position',
    `company_name`='$company_name',
    `people_id`='$people_id' WHERE  id = $id";
    $db->query($sql);
    
    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php?cv_id='.$people_id);
    ?>