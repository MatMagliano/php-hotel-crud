<?php 
  include __DIR__ . "/../db.php";
  include __DIR__ . '/../partials/header.php';

  if (empty($_POST['id'])) {
    die('id non corretto');
  }
  $idRoom = $_POST['id'];
  $sql = "SELECT * FROM `stanze` WHERE `id` = '$idRoom'";
  var_dump($sql);



  $result = $conn->query($sql);
  if ($result && $result->num_rows == 0) {
    die('id non corretto');
  }

  $sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom'";
  var_dump($sql);
  $result = $conn->query($sql);
  if ($result) {
    echo 'ok';
  } else {
    echo 'ko';
  }
  
  
  
  
  
  
  
  
  $conn->close();