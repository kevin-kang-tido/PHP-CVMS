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
    // echo baseUrl('users/index.php');
    // exit();
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
