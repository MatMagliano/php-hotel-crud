<?php 
    include_once 'db.php';
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo 'errore'.$conn->connect_error;die();
    }
    $sql = "SELECT * FROM `stanze`";
    $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {
        $rooms = [];
        while ($row = $results->fetch_assoc()) {
            // echo $row['id'].' - '. $row['floor'];
            $rooms[] = $row;
        }
    }
    elseif ($results) {
        echo 'No results';
    }
    else {
        echo 'Query error';
    }

    $conn->close();