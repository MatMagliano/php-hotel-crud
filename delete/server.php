<?php 
  include __DIR__ . "/../db.php";
  include __DIR__ . '/../partials/header.php';

  if (empty($_POST['id'])) {
    die('id non corretto');
  }
  $idRoom = $_POST['id'];
  $sql = "SELECT * FROM `stanze` WHERE `id` = '$idRoom'";

  $results = $conn->query($sql);
  if ($results && $results->num_rows == 0) {
    die('id non corretto');
  }

  $sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom'";
  $results = $conn->query($sql);
  //var_dump($result);
  if ($results) {
    echo 'ok';
  } else {
    echo 'ko';
  }
  
  
  
  
  
  
  
  
  $conn->close();