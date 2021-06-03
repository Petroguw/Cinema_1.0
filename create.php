<?php

require_once 'db.php';
$t_id = $_POST['t_id'];
$name = $_POST['name'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$desc = $_POST['desc'];
$rating = $_POST['rating'];
$image = $_POST['image'];
$video_url = $_POST['video_url'];

mysqli_query($connect,"INSERT INTO `films`(`id`, `t_id`, `name`, `year`, `genre`, `desc`, `rating`, `image`, `video_url`) VALUES (NULL, '$t_id', '$name', '$year', '$genre', '$desc', '$rating', '$image' , '$video_url')");

header('Location: /FINAL/adminpage.php');
