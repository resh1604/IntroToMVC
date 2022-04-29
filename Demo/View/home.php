
<?php

use Week5\Controller\AppController;

    require '../Controller/index.php';

    $controller = new AppController();

   $result = $controller-> index();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
            <?php
                foreach($result as $value):
            ?>   
                    <tr><td><?= $value; ?></td></tr>
            <?php    
                endforeach;
           ?>
        </tbody>
    </table>
</body>
</html>