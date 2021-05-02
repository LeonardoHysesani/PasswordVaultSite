<?php
    require('dbconfig.php');
    // Create connection
    $conn = new mysqli($hostname, $db_username, $db_password, $db_name);
    // Check connection
    if (!$conn) {
        die("Connection to database failed: " . mysqli_connect_error());
    }
?>