
<?php 
  include __DIR__ . "/../db.php";
  

  if (!empty($_GET['id'])) {
    $idRoom = $_GET['id'];
  }
  $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
    $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {
        $room = $results->fetch_assoc();
    }