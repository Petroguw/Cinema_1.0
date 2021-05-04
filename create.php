<?php

require_once 'db.php';

$name = $_POST['name'];
$year = $_POST['goals'];
$genre = $_POST['goals'];
$rating = $_POST['goals'];
mysqli_query($connect,"INSERT INTO `films` (`id`, `name`, `year`, `genre`, `rating`) VALUES (NULL, '$name', '$year', '$genre', '$rating')");

header('Location: /FINAL/films.php');
