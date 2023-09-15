<?php

    require_once 'config/connect.php';

    $product_id = $_GET['id'];

    $product = mysqli_query($connect, "SELECT * FROM `Отзывы` WHERE `Номер` = '$product_id'");


    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменить комментарий</title>
</head>
<body>
    <h3>Изменить комментарий</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['Номер'] ?>">
        <p>Автор</p>
        <input type="text" name="title" value="<?= $product['Автор'] ?>">
        <p>Товар</p>
        <textarea name="description"><?= $product['Товар'] ?></textarea>
        <p>Комментарий</p>
        <textarea name="price"><?= $product['Комментарий'] ?></textarea> <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>