<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers List</title>
</head>

<body>
    <h3>Flowers List</h3>

    <?php foreach ($flowers as $flower) : ?>
        <p>
            <strong>Name :</strong>
            <?= $flower['name']; ?>
            <br>

            <strong>Price : </strong>
            <?= $flower['price']; ?>
            <br>

            <a href="index.php?page=flowers&id=<?= $flower['id']; ?>">Read more</a>
            <hr>
        </p>
    <?php endforeach; ?>
</body>

</html>