<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FROM SUBMIT
    $strat_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $position = $_POST['position'];
    $company_name = $_POST['company_name'];
    $people_id = $_POST['people_id'];

    $sql = "INSERT INTO 
    `experiences`( `start_year`, `end_year`, `position`, `company_name`, `people_id`)
     VALUES
      ('$strat_year','$end_year','$position','$company_name','$people_id')";
    $db->query($sql);

    $_SESSION['success'] = "Insert successfully.";
    header('location: index.php?cv_id='.$people_id);
?>