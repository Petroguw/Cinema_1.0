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
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 
</div>
<div class="block">
    <div class="wrapper">
        <div class="title">Sign up</div>
          <div class="panel-body">
        <form action="process_registration.php" method="post" id="form1">
        <div class="field">
        <input name="name" type="text" size="25" placeholder="Name" class="form-control"/>
        <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name"));  ?>
      </div>
      <div class="field">
        <input name="age" type="text" size="25" placeholder="Age" class="form-control"/>
        <?php $frm->validate("age",array("required","label"=>"Age","regexp"=>"age"));  ?>
      </div>
      <div class="field">
        <select name="gender" class="form-control">
            <option value >Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <?php $frm->validate("gender",array("required","label"=>"Gender"));  ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="field">
        <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control"/>
        <?php $frm->validate("phone",array("required","label"=>"Mobile Number","regexp"=>"mobile"));  ?>
      </div>
      <div class="field">
        <input name="email" type="text" size="25" placeholder="Email" class="form-control"/>
        <?php $frm->validate("email",array("required","label"=>"Email","email")); ?>
      </div>
      <div class="field">
        <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <?php $frm->validate("password",array("required","label"=>"Password","min"=>"7"));  ?>
      </div>
      <div class="field">
        <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <?php $frm->validate("cpassword",array("required","label"=>"Confirm Password","min"=>"7","identical"=>"password Password"));?>
      </div>
      <div class="field">
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </div>
</div>
    </form>
      </div>
    </div>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>