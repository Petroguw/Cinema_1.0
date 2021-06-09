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
						<table class="table table-hover table-bordered text-center" style="width:950px; margin: 20px;color:white;">
							<?php
								$s=mysqli_query($con,"select * from tbl_shows where s_id='".$_SESSION['show']."'");
								$shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
								<td class="col-md-6">
											Theatre
										</td>
								<td>
								<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
							<td>
							<?php 
								$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shw['st_id']."'");
												
								$ttme=mysqli_fetch_array($ttm);
												
								$sn=mysqli_query($con,"select  * from tbl_screens where screen_id='".$ttme['screen_id']."'");
												
								$screen=mysqli_fetch_array($sn);
												echo $screen['screen_name'];
							
												?>
										</td>
									</tr>
									<tr>
										<td>
											Date
										</td>
										<td>
											<?php 
											if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
			<div class="col-md-12 text-center" style="padding-bottom:20px">
				<?php if($date>$_SESSION['dd']){?><a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
					<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
						<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
							<?php }
								$av=mysqli_query($con,"select sum(no_seats) from tbl_bookings where show_id='".$_SESSION['show']."' and ticket_date='$date'");
								$avl=mysqli_fetch_array($av);
								?>
							</div>
										</td>
									</tr>
									<tr>
					<td>
						Show Time
					</td>
						<td>
							<?php echo date('h:i A',strtotime($ttme['start_time']))." ".$ttme['name'];?> Show
										</td>
									</tr>
									<tr>
										<td>
											Seats number
										</td>
					<td>
						<form  action="process_booking.php" method="post">
						<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
						<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
						<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
						<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									<tr>
						<td>
							Cost
						</td>
							<td id="amount" style="font-weight:bold;font-size:18px">
								<?php echo $screen['charge'];?>
										</td>
									</tr>
									<tr>
							<td colspan="2"><?php if($avl[0]==$screen['seats']){?><button type="button" class="btn btn-danger" style="width:100%">House Full</button><?php } else { ?>
								<button class="btn btn-info" style="width:100%">Book Now</button>
										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
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