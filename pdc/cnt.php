<?php
    $servername = "mysql.hostinger.mx";
    $username = "u873755028_labor";
    $password = "l1b4r1t4r34";
    $dbname = "u873755028_labor";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>