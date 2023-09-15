<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM Отзывы WHERE `Отзывы`.`Номер` = '$id'" );

header('Location: /reviews.php');