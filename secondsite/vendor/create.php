<?php
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect,"INSERT INTO `Отзывы` (`Номер`, `Автор`, `Товар`, `Комментарий`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: /reviews.php');