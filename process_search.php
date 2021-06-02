 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    <style>
    </style>
</head>
<?php include('header.php');
extract($_POST);
?>
</div>
<section>
<div class="container">
        <div class="row">
		<div class="col-lg-10 col-md-10">			
			<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select DISTINCT movie_name,movie_id,image,cast from tbl_movie where movie_name='".$search."'");while($m=mysqli_fetch_array($qry2))
                   {
             ?>	<div class="main">
             	<div class="title">
             		<a href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $m['movie_name'];?></a>
             	</div>
                <div class="message">
                <div class="row">
                  		<div class="col-md-4">
                    		<div class="image">				<a href="about.php?id=<?php echo $m['movie_id'];?>" rel="lightbox"><img  style="width:200px" class="movie-img" src="<?php echo $m['image'];?>" alt="" /></a>
						  	</div>
						</div>
						<div class="col-md-6">
                    		<div class="text">
						  		<b>Genre: </b><Span class="color2"><?php echo $m['cast'];?></span><br>
			               	
						  	</div>
		  				</div>
		  		</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
		</div>
	</div>		
</div>
</section>
			<?php include('footer.php');?>
			      
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
