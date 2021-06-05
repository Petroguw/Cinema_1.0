<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" type="text/css" href="Main.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.csss">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
    </style>
</head>

<body>

<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 
</div>
<div class="content">
	<div class="wrap">  
            <div class="col-lg-12">
        		
        			<h3>Payment</h3>
                    			<form action="bank.php" method="post" id="form1">
                    			<div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
                    			<div class="form-group">
                       <label class="control-label">Name on Card</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                       <label class="control-label">Card Number</label>
                        <input type="text" class="form-control" name="number" required title="Enter 16 digit card number">
                      
                    </div>      
                    <div class="form-group">
                       <label class="control-label">Expiration date</label>
                        <input type="date" class="form-control" name="date" style="width:80%">
                    </div>
                    <div class="form-group">
                       <label class="control-label">CVV</label>
                        <input type="text" class="form-control" name="cvv">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Make Payment</button>
                        </form>
        </div>
        </div>

	</div>
			
		<div class="clear"></div>	
		
	</div>
    </div>
<?php include('footer.php');?>

<?php

    extract($_POST);
    include('config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
    header('location:bank.php');
?>
<script>
        document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
function ValidateForm() { 
    var regPin = RegExp("^[0-9]{4,6}$");
    
            document.form1.submit();
        

}
</script>