
<?php 
  include __DIR__ . "/../db.php";

  if (empty($_POST['id'])) {
    die('id ss inserito');
  }
  if (empty($_POST['floor'])) {
    die('id non inserito');
  }
  if (empty($_POST['room_number'])) {
    die('id non inserito');
  }
  if (empty($_POST['beds'])) {
    die('id non inserito');
  }

  $idRoom = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNumber = $_POST['room_number'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
    $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {
        $room = $results->fetch_assoc();
    }
    else{
      die('id non esistente');
    }

  $sql = "UPDATE ´stanze´ SET `room_number` = $roomNumber, `beds` = $beds, `floor`= $floor WHERE id = $idRoom";

  $result = $conn->query($sql);

  if($result) {
    header("Location: $basePath . /show/show.php?id=$idRoom");
  } else {
    echo 'ko';
  }


