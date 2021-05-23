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

	<?php 
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
<div class="container movie-details">
	<div class="row">
			<div class="col-md-6 left-box">
			<h3><?php echo $movie['movie_name']; ?></h3>
					<div class="desc span_3_of_2">
						<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
						<p class="p-link" style="font-size:15px"><h5>Jenre :</h5> <?php echo $movie['cast']; ?></p>
						<p class="p-link" style="font-size:15px"><h5>Relece Date :</h5> <?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
						<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
					</div>
						<div class="clear"></div>
							</div>
							<div class="col-md-6 text-center">
					<img  class="movie-img" src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
			<?php $s=mysqli_query($con,"select DISTINCT theatre_id from tbl_shows where movie_id='".$movie['movie_id']."'");
							if(mysqli_num_rows($s))
							{?>
			<table class="table table-hover table-bordered text-center" style="color: white;">
				<?php
				while($shw=mysqli_fetch_array($s))
				{
				$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
				$theatre=mysqli_fetch_array($t);
									?>
									<tr>
				<td>
				<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										<td>
				<?php $tr=mysqli_query($con,"select * from tbl_shows where movie_id='".$movie['movie_id']."' and theatre_id='".$shw['theatre_id']."'");
				while($shh=mysqli_fetch_array($tr))
											{
				$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shh['st_id']."'");
												$ttme=mysqli_fetch_array($ttm);
												
												?>
												
												<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>&theatre=<?php echo $shw['theatre_id'];?>"><button class="btn btn-default"><?php echo date('h:i A',strtotime($ttme['start_time']));?></button></a>
												<?php
											}
											?>
										</td>
									</tr>
									<?php
								}
							?>
						</table>
							<?php
							}
						
							else
							{
								?>
								<h3>No Show Available</h3>
								<?php
							}
							?>
					</div>			
				<!-- <?php include('movie_sidebar.php');?> -->
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>

<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>
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
