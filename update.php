<?php

require_once 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$year = $_POST['goals'];
$genre = $_POST['goals'];
$rating = $_POST['goals'];


mysqli_query($connect, "UPDATE `films` SET `name` = '$name', `year` = '$year', `genre` = '$genre', `rating` = '$rating' WHERE `films`.`id` = '$id'");

header('Location: /FINAL/adminpage.php');