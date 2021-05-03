<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" href="login.css">
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
      <div class="title">
Login</div>
<form action="#">
        <div class="field">
          <input type="text" required>
          <label>Email Address</label>
        </div>
<div class="field">
          <input type="password" required>
          <label>Password</label>
        </div>
<div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
</div>
<div class="field">
          <input type="submit" value="Login">
        </div>
<div class="signup-link">
Not a member? <a href="signup.php">Signup now</a></div>
</form>
</div>
</div>


</body>

</html>
