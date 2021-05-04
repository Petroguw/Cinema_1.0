<?php
require_once 'db.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `cinema` WHERE `films`.`id` = '$id'");

header('Location: /Final/films.php');