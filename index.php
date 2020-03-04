<?php 
    include 'server.php';
    include 'partials/header.php';
 ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutte le Stanze</h2>
                <table class="table">
                    <thead>
                        <th>ID</th>
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
                                        <td><a href="">UPDATE</a></td>
                                        <td>DELETE</td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>