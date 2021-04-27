<?php

require_once 'FlowerManager.php';

$flowerManager = new FlowerManager();
$flowers = $flowerManager->findAll();

echo '<pre>';
var_dump($flowers);
echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
</head>

<body>

    <?php if (!$flowers) : ?>
        <p style="color:red">No flowers found in DB. Or Something Went Wrong.</p>
    <?php else : ?>
        <?php foreach ($flowers as $flower) : ?>
            --
            <p>Name : <?= $flower->getName(); ?></p>
            <p>Price : <?= $flower->getPrice(); ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>