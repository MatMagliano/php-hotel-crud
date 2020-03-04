<?php 
    include __DIR__ . '/../db.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo 'errore'.$conn->connect_error;die();
    }
    