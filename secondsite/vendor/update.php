<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `Отзывы` SET `Автор` = '$title', `Комментарий` = '$price', `Товар` = '$description' WHERE `Отзывы`.`Номер` = '$id'");


header('Location: /reviews.php');