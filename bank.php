<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
extract($_POST);
?><!doctype html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<title>RenataS Bank - All your payments are safe!</title>
<link href="css/bank.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="mainContainer" class="row large-centered">

  <div class="text-center"><h2>National Bank of KZ named after Renata S</h2></div>
  
  <hr class="divider">
  <dl class="mercDetails">
    <dt>Price</dt>   <dd>INR <?php echo  $_SESSION['amount'];?></dd>
    <dt>Your card number</dt>     <dd><?php echo  $number;?></%></dd>
  </dl>
  <hr class="divider">
  
  
<form name="form1" id="form1" method="post" action="complete_payment.php">
<fieldset class="page2">
<div class="page-heading">
<p class="form-subheading">We've sent you a code (probably not)</p>


</div>

<div class="row formInputSection">
<div class="large-7 columns">
<label>
  Enter password 
  <input type="tel" name="otp"  class="form-control optPass" value="" maxlength="6" autocomplete="off"/>
</label>
</div>
<div class="large-5 columns">
<label>&nbsp;</label><button class="expanded button next" onClick="ValidateForm()">Make Payment</button>
</div>
</div>
</fieldset>


</form>
</div>
<script src="bank/script/jquery-1.9.1.js"></script>
<script>
document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
function ValidateForm() { 
  var regPin = RegExp("^[0-9]{4,6}$");
  if( document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin) ) {  
            document.form1.submit();
        }

}
</script>

</body>
</html>