<?php 
    include 'server.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Hotel</title>
</head>
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
                            <?php 
                                if (!empty($rooms)) {
                                    foreach ($rooms as $room) { ?>
                                        <tr>
                                            <td><?php echo $room['id'] ?></td>
                                            <td><?php echo $room['floor'] ?></td>
                                            <td><a href="">VIEW</a></td>
                                            <td><a href="">UPDATE</a></td>
                                            <td>DELETE</td>
                                        </tr>
                                <?php }
                                }
                                ?>
                            
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>