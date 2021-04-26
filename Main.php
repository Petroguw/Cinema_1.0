<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
	<?php
	require 'header.php'
	?>

	<div class="row">
		<div class="col-lg-8">
			<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin: 20px">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<div style="margin: 20px">
				<h1 style="margin: 10px;">TEXT_TEXT_TEXT</h1>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
				</div>
				<div>
					<p>TEXT_TEXT_TEXT_TEXT</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="jumbotron jumbotron-fluid" style="margin: 20px; background-color: #37003c;">
				<div class="container" >
					<h1 class="display-4 text-center"><a href="News.php">TEXT</a></h1>
					<h4>22 Sep, 10:00</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>21 Sep, 20:00</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>26 Jul, 12:30</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>20 Jul, 14:30</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>17 Jul, 22:00</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>14 Jul, 13:34</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
					<h4>29 Jun, 12:30</h4>
					<p class="lead">TEXT_TEXT_TEXT</p>
				</div>
			</div>
		</div>
	</div>
	
	<?php
	require 'footer.php'
	?>

</body>

</html>