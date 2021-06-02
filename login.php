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
        
          <div class="panel panel-default">
            <div class="title">Login</div>
            <div class="panel-body">
              <?php include('msgbox.php');?>
          <form action="process_login.php" method="post">
        <div class="form-group has-feedback">
          <div class="field">
          <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        </div>
        <div class="form-group has-feedback">
          <div class="field">
          <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
   
            <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php">Register</a></p>
        </div>
        </div>
  </div>
      </form>
        </div>
      </div>
      <div class="clear"></div> 
      
    </div>
  <?php include('footer.php');?>
  </div>