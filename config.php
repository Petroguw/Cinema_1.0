<?php
  $host = "localhost";
    $user = "root";                     
    $pass = "";                                  
    $db = "db_movie";                                  
     $con = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>
