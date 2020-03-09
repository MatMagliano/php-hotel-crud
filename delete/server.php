<?php 
  include __DIR__ . "/../db.php";
  include __DIR__ . '/../partials/header.php';
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
      echo 'errore'.$conn->connect_error;die();
  }

  if (empty($_POST['id'])) {
    die('id non corretto');
  }

  $idRoom = $_POST['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = '$idRoom'";
  



  $result = $conn->query($sql);
  if ($result && $result->num_rows == 0) {
    die('id non corretto');
  }

  $sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom'";
  $result = $conn->query($sql);
  if ($result) {
    header("location: $basePath?roomNumber=$idRoom");
  } else {
    echo 'ko';
  } 
  
  $conn->close();