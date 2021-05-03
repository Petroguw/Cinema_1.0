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
Sign up</div>
<form action="#">
        <div class="field">
          <input type="text" required>
          <label>Name</label>
        </div>
        <div class="field">
          <input type="text" required>
          <label>Surname</label>
        </div>
        <div class="field">
          <input type="text" required>
          <label>Email Address</label>
        </div>
<div class="field">
          <input type="password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="password" required>
          <label>Repeat password</label>
        </div>
<div class="content">
</div>
<div class="field">
          <input type="submit" value="Sign up">
        </div>
<div class="signup-link">
Already a member? <a href="login.php">Sign in</a></div>
</form>
</div>
</div>


</body>

</html>
