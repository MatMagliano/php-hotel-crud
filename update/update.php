<?php 
  include 'server.php';
  include __DIR__ . '/../partials/header.php';


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
          <input type="hidden" name="id" value="">
          <input class="btn btn-submit form-control" type="submit" name="Salva" value="">
        </div>
      </form>
    </div>
  </div>
</div>















<?php 
  include __DIR__ . '/../partials/footer.php';
?>