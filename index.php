<?php
  require 'config.php';

  $result = mysqli_query($con, "SELECT * FROM `tbl_movie`");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cinema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="indeex.css">
</head>

<body>
  <!--
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="main-head">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="logan.jpg" alt="...">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="logan.jpg" alt="...">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="logan.jpg" alt="...">
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
            </div>
          </div>
        </div>
      </div>
    </header>
  -->
  <?php
    require 'header.php' 
  ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10">
            <?php 
              while ($films = mysqli_fetch_assoc($result)) {
                ?>
                <div class="main">
              <div class="title">
                <a href="about.php?id=<?php echo $films['movie_id'];?>" class="link4"><h3><?php echo $films['movie_name'];?></h3></a>
              </div>
              <div class="message">
                <div class="row">
                  <div class="col-md-4">
                    <div class="image">
                      <img style="width: 100%; height: auto;" class="image" src="<?php echo $films['image']; ?>" alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="text">
                        <p>Release date: <?php echo $films['release_date']; ?></p>
                        <p>Jenre: <?php echo $films['cast']; ?></p>
                        <p>Description: <?php echo $films['desc']; ?></p>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>