<?php 
    session_start();
    require_once('../connection.php');
    //GET VALUE FORM SUBMIT
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $webiste = $_POST['webiste'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $address = $_POST['address'];
    $people_id = $_POST['people_id'];
    $profile = '';
    
$sql = "UPDATE people SET `full_name`='$full_name',
`gender`='$gender',`phone`='$phone',`email`='$email',`website`='$website',
`address`='$address',`dob`='$dob',`pob`='$pob',`photo`='$profile' WHERE id =$id
";
    $db->query($sql);

    $_SESSION['success'] = "Updated successfully.";
    header('location: index.php?cv_id='.$people_id);
?>