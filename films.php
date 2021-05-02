<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.csss">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
	<?php
	require 'header.php'
	?>
	<div class="container movie-details">
		<div class="row">
			<div class="col-md-6 left-box">
				<h1>Attak On Titan</h1>
				<p>Attack on Titan (Japanese: 進撃の巨人, Hepburn: Shingeki no Kyojin) is a Japanese dark fantasy anime television series adapted from the manga of the same name by Hajime Isayama that premiered on April 7, 2013. </p>
				<p id="demo" style="display:none">It used to air on NHK General TV in Japan,[e] Aniplus Asia in various Asia-Pacific countries,[f] and Crunchyroll, Funimation, Prime Video, and Hulu in Canada and the United States.</p>
				<h5>Year:</h5>
				<h5>Jenre:</h5>

				<button type="button" onclick="document.getElementById('demo').style.display='block'">continue reading</button></br>
				<a href="#"><i calss="fa fa-play"></i>Watch Trailer</a>
			</div>
			<div class="col-md-6 text-center">
				<img src="aot.jpg" class="movie-img">
			</div>
		</div>
	</div>
	<div class="container caru">
    <div class="carousel">
      <div class="carouselbox">
 
      </div>

      <a class="switchLeft sliderButton" onclick="sliderScrollLeft()"><</a>
      <a class="switchRight sliderButton" onclick="sliderScrollRight()">></a>
    </div>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
    <script src="./index.js"></script>
	<?php
	require 'footer.php'
	?>

</body>

</html>