<?php 
    session_start();
   
    $project_path = "/code_cvms/cvms/";
    // echo $_SERVER['HTTPS'];
    // echo $_SERVER['HTTP_HOST'];
    function baseUrl($uri = ''){
        global $project_path;
        if(empty($_SERVER['HTTPS'])){
          return 'http://'.$_SERVER['HTTP_HOST'].$project_path.$uri;
        }else{
          return 'https://'.$_SERVER['HTTP_HOST'].$project_path.$uri;
        }
    }

    // check if user not login 
    if(!isset($_SESSION['is_login']) || $_SESSION['is_login'] != 1){
        $login_url = baseUrl('auth/login.php');
        $_SESSION['error'] = 'Please login!';
        header('location: '.$login_url);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong><u>CVMS</u></strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('people/index.php')?>">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('skills/index.php') ?>">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('users/index.php') ?>">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('people/index.php') ?>">People</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('languages/index.php') ?>">Languages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('educations/index.php') ?>">Educations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl('experiences/index.php') ?>">Experiences</a>
                        </li>
                        
                        <li class="nav-item">
                          
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                  <a class="nav-link" href="<?php echo baseUrl('auth/logout.php')?>">Logout</a>
                </div>
            </div>
        </nav>