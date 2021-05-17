<?php
  session_start();
  if(isset($_SESSION['user'])){
          header('Location: ../CodingLab/profile.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
  <?php
    require 'header.php'
  ?>
	
  <div class="block">
    <div class="wrapper">
      <div class="title">Sign up</div>
        <form action="signupCheck.php" method="post">
          <div class="field">
            <input type="text" name="full_name" required>
            <label>Full name</label>
          </div>
          <div class="field">
            <input type="text" name="login" required>
            <label>Login</label>
          </div>
          <div class="field">
            <input type="text" name="email" required>
            <label>Email Address</label>
          </div>
          <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
          </div>
          <div class="field">
            <input type="password" name="password_confirm" required>
            <label>Repeat password</label>
          </div>
          <div class="content">
          </div>
          <div class="field">
            <input type="submit" value="Sign up">
          </div>
          <div class="signup-link">
            Already a member? <a href="login.php">Sign in</a>
          </div>
          
            <?php 
              if(isset($_SESSION['message'])){
                echo '<p class="msg"> ' . $_SESSION['message'] .' </p>';
              }
              unset($_SESSION['message']);
            ?>
          
        </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
