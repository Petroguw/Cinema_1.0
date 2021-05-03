<?php
if (session_status()==PHP_SESSION_NONE) {
session_start();}
require_once "functions.php";

if (!empty($_POST['mname'])  &&
!empty($_POST['description']) && 
!empty($_POST['year']) && 
!empty($_FILES['genre'])
){
insertProduct($_POST['mname'], $_POST['description'], $_POST['year'], file_get_contents($_FILES['genre']['tmp_name']));
}
?>