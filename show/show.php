<?php
    include 'server.php';
    include __DIR__ . '/../partials/header.php';
 ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <ul style= "list-style: none;">
                <li>Stanza n.° : <?php echo $room['id'] ?></li>
                <li>Floor: <?php echo $room['floor'] ?></li>
                <li>Room Number: <?php echo $room['room_number'] ?></li>
                <li>Beds: <?php echo $room['beds'] ?></li>
            </ul>

        </div>
    </div>
</div>
<?php 
    include __DIR__ . "/../partials/footer.php";
?>