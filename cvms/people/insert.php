<?php 
    session_start();
    require_once('../connection.php');
        
    $people_id = $_POST['people_id'];

    //GET VALUE FROM SUBMIT
    // var_dump($_POST['full_name']);
    // var_dump($_REQUEST);
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $webiste = $_POST['webiste'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $address = $_POST['address'];
    $profile = '';
    if(isset($_FILES['profile'])){
        // var_dump($_FILES['profile']);
        $file =  $_FILES['profile'];
        $file_name = $file['name'];
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $current = date('Y-m-d H:i:s');
        $date_number = strtotime($current);
        $new_name = $date_number.'.'.$file_ext;

        // validation for file allowed
        $accept_only = ['jpg', 'jpeg', 'png'] ;
        if(!in_array($file_ext, $accept_only)){
            $_SESSION['error'] = "File extension is not allowed.";
            header('location: create.php');
            exit(); // finish program
        }
        // check file size allowing 
        if($file_size > 8000000){   
            $_SESSION['error'] = "Allowed file size is 2M";
            header('location: create.php');
            exit(); // finish program
        }
        
        move_uploaded_file ($file_tmp, "../assets/images/".$new_name);

        $profile = $new_name;
    }

    $sql = "INSERT INTO `people`(`full_name`, `gender`, `phone`, `email`, `website`, `dob`, `pob`, `address`, `photo`) 
            VALUES ('$full_name','$gender','$phone','$email','$webiste','$dob', '$pob', '$address', '$profile')";

    $db->query($sql);

    $_SESSION['success'] = "Insert successfully.";
    header('location: index.php');
?>