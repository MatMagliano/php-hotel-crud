<?php 
  include __DIR__ . "/../db.php";
  include __DIR__ . '/../partials/header.php';
  $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn && $conn->connect_error) {
        echo 'errore'.$conn->connect_error;die();
    }

  if (!empty($_GET['id'])) {
    $idRoom = $_GET['id'];
  }
  $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
    $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {
        $room = $results->fetch_assoc();
    }
    else{
      die('id non esistente');
    }

?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="room_number">Numero Stanza</label>
          <input class="form-control" type="text" name="room_number" value="<?php echo $room['room_number'] ?> ">
        </div>
        <div class="form-group">
          <label for="beds">Numero Letti</label>
          <input class="form-control" type="text" name="beds" value="<?php echo $room['beds'] ?>">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input class="form-control" type="text" name="floor" value="<?php echo $room['floor'] ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
          <input class="btn btn-primary form-control" type="submit"  value="Salva">
        </div>
      </form>
    </div>
  </div>
</div>


<?php 
  include __DIR__ . '/../partials/footer.php';
?>