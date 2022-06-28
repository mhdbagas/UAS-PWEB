<?php
    $host = "localhost";
    $user = "bagas";
    $pass = "12345";
    $dbname = "eposyandu";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn){
        echo "Database tidak terhubung";
    }
?>