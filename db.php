<?php
    $servername = "localhost:8889";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel";

    $host = "http://localhost:8888/";
    $folder = "php-hotel-crud/";
    $basePath = $host . $folder;
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn && $conn->connect_error) {
        echo 'errore'.$conn->connect_error;die();
    }