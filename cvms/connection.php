<?php
    define('SERVERNAME', 'localhost'); 
    define('DBNAME', 'cv_db_two');
    define('USERNAME', 'root');
    define('PASSWORD', '');

    // Create connection
    $db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
?>