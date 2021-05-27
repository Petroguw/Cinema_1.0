<?php
  require 'config.php'
  ?><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    <link rel="stylesheet" type="text/css" href="Main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
  <?php
  require 'header.php'
  ?>
<div class="content" >
	<div class="wrap">
			<div class="col-md-8 left-box">
				<?php
          	 	$today=date("Y-m-d");
          		$qry2=mysqli_query($con,"select * from  tbl_movie where status='0' order by rand() limit 3");
					while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
            
					<div class="listimg listimg_1_of_2">
					<?php
						
						?>

					</div>
					<a href="about.php?id=<?php echo $m['movie_id'];?>" class="link4"><h4><?php echo $m['movie_name'];?></h4></a>
			                 <span class="data"><b>Release Date: </b><?php echo $m['release_date'];?></span><br>
			                <b>Cast: </b><Span class="data"><?php echo $m['cast'];?></span><br>
			                <b>Description: </b> <span" class="color2"><?php echo $m['desc'];?></span><br>
		    </div>
			<div class="col-md-8 text-right">
				<img style="width:200px" class="movie-img" src="<?php echo $m['image']; ?>" alt=""/>
			</div>
			
					<div class="clear"></div>
		</div>
  	    <?php
  	    	}
  	    	?>		
				</div>		
				<div class="clear"></div>	
		
	</div>
	<?php include('footer.php');?>
</div>