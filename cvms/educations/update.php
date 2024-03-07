 
<?php 
    session_start();
    require_once('../connection.php');
    $people_id = $_POST['people_id'];
    $id = $_POST['id'];
    $start_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $major = $_POST['major'];
    $degree = $_POST['degree'];
    $school_name = $_POST['school_name'];

    $sql = "UPDATE educations SET 
    `start_year`='$start_year',
    `end_year`='$end_year',
    `major`='$major',
    `degree`='$degree',
    `school_name`='$school_name'
     WHERE id = $id";

    $db->query($sql);
    
    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php?cv_id='.$people_id);
    exit;

?>

