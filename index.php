<?php 
    include 'server.php';
    include 'partials/header.php';
?>
<?php if (!empty($_GET['roomNumber'])) { ?>
    <div class="alert alert-danger">
        Hai cancellato la stanza numero <?php echo $_GET['roomNumber'] ?>
    </div>
        
<?php   } ?>


<div class="row">
    <div class="col-12">
        <h2>Tutte le Stanze</h2>
        <table class="table">
            <thead>
                <th>STANZA N.°</th>
                <th>FLOOR</th>
                <th></th>
                <th></th>
                <tbody>
                    <?php if (!empty($rooms)) { ?>
                        <?php foreach ($rooms as $room) { ?>
                            <tr>
                                <td><?php echo $room['id'] ?></td>
                                <td><?php echo $room['floor'] ?></td>
                                <td><a href="show/show.php?id=<?php echo $room['id'] ?>">VIEW</a></td>
                                <td><a href="update/update.php?id=<?php echo $room['id'] ?>">UPDATE</a></td>
                                <td>
                                    <form action="delete/server.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                                        <input class="btn btn-danger" type="submit" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    
                </tbody>
            </thead>
        </table>
    </div>
</div>
<?php
    include __DIR__ . "/partials/footer.php";
?>  
