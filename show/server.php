<?php 
    include 'database.php' ;
    
    $idRoom = $_GET['id'];
    $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
    $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {
        $room = $results->fetch_assoc();
    }
    elseif ($results) {
        echo 'No results';
    }
    else {
        echo 'Query error';
    }

    $conn->close();