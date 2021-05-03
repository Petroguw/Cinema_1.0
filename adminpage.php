</html>
<!doctype html>
<?php
    require('connect.php');
?>
<?
   if (session_status()==PHP_SESSION_NONE)
{
session_start();}
   require_once "functions.php"; 
$resultArr= getProducts();
?>
<html>
<head>
<title>Cinema</title>
</head>
<body>
  <h1>Admin side</h1>
<?
  require_once "functions.php";
  ?>
        <div class="modal-header">
          <h2 class="modal-title">Add new product</h2>
        </div>
  <div class="modal-body">
<form action="insert-cinema-submit.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="col-form-label">movie name</label>
  <input type='text' class="form-control" name='mname'>
    </div>
  <div class="form-group">
    <label class="col-form-label">description</label>
  <input type='text' step="1" min="0" class="form-control" name='description'>
    </div>
  <div class="form-group">
    <label class="col-form-label">year</label>
  <input type='number' step="1" min="0" class="form-control" name='year'>
    </div>
  <div class="form-group">
    <label class="col-form-label">genre</label>
  <input type='text' class="form-control" name='genre' required>
    </div>
  <div class="form-group">

  <div class="right-w3l">
    <input type='submit' id="button" class="form-control" value='Insert'>
  </div>
</form>  
</div>
    <? endif;?>

 </body>
</html>