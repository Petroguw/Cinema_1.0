<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="Main.css">
<style>
  b{
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    letter-spacing: -0.015em;
    color: rgba(255, 255, 255, 0.8);
  }
  .title_media{
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 24px;
    padding-top: 120px;
    letter-spacing: 0.05em;
    color: white;
  }
  .brd {
    width: 786px;
    border: 0.5px double rgba(225, 225, 225, 0.25); /* Параметры границы */
    background: #37003c; /* Цвет фона */
    padding: 50px;
   }
</style>
    
</head>
<body>
	<?php require 'header.php' ?>
	<?php require_once 'db.php' ?>
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="background-color: #37003c;">
          <hr style="height:2px;border-width:0;color: white;background-color:white">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-10" style="background-color: #37003c; color: white;">
          <div class="jumbotron jumbotron-fluid" style="background-color: #37003c; color: white;">
              <h1 class="display-4">Media</h1>
              <hr style="height:2px;border-width:0;color: white;background-color:white">
              <table width="100%" cellspacing="0" cellpadding="5">
                <tr> 
                  <td valign="top">
                      <p class="title_media">Articles</p>  
                      <b>Read articles about famous films, interviews with actors, directors and other cinematographers,<br> how cinema is made and how it was born.</b>
                  </td>
                  <td valign="top">
                      <p class="title_media">The Hotlist</p>
                      <b>Our pick of the best TV shows and best films available now. Browse the hottest <br> films out now to find your next favourite, all available on RIM cinema.</b>
                  </td>
                </tr>
              </table>
          </div>   
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-10" style="background-color: #37003c; color: white;">
          <div class="jumbotron jumbotron-fluid" style="background-color: #37003c; color: white;">
              <p class="title_media">News</p>  
              <b>Latest movie news on RIM Cinema. Daily updates, the freshest and most interesting <br>information from the world of cinema: articles about stars, interviews, reports, reviews <br> of premieres and box office receipts</b>
          </div>
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-12" style="background-color: #37003c; padding: 50px;">
          <hr style="height:2px;border-width:0;color: white;background-color:white">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <img src="images_media/fast and the furious.png" alt="phoneicon" class="navbar-brand" style="width: 750px; height: 456px">
        </div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <p class="title_media">The ninth "Fast and the Furious" came out 20 years after the first. Remember how it all began</p><br>  
              <b>The next sequel to The Fast and the Furious is being released in cinemas. It reveals that the driver, special agent and family man Dominic Toretto has a brother, Jacob, whom he never talked about. The ninth part contains many references to the very first film in the franchise, which turns 20 this year.</b>
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-12" style="background-color: #37003c; padding: 50px;">
          <hr style="height:2px;border-width:0;color: white;background-color:white">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <p class="title_media">How was the Oscar-2021 ceremony and what its script and winners say</p><br>  
              <b>Vasily Stepanov comments on the choice of academics, the speeches of the speakers and the general mood of the most relaxed Oscar in history.</b>
        </div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <img src="images_media/oscar.png" alt="phoneicon" class="navbar-brand" style="width: 750px; height: 456px">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-12" style="background-color: #37003c; padding: 50px;">
          <hr style="height:2px;border-width:0;color: white;background-color:white">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-10" style="background-color: #37003c; color: white;">
          <div class="jumbotron jumbotron-fluid" style="background-color: #37003c; color: white;">
              <h1 class="display-4">What's new?</h1>
              <b style="font-family: Montserrat; font-size: 25px; line-height: 50px;color: rgba(255, 255, 255, 0.8); text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Everything about drama genre series and films</b>
          </div>   
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <div class="brd">
            <img src="images_media/In Search of Love.png" alt="phoneicon" class="navbar-brand" style="width: 686px; height: 400px">
            <center>
               <p class="title_media">The series "In Search of Love"</p>  
              <b>An ironic look at England in the 1920s and 1930s and its arrogant aristocracy</b>
            </center>
          </div>

        </div>
        <div class="col-lg-5" style="background-color: #37003c;">
          <div class="brd">
            <img src="images_media/tom.png" alt="phoneicon" class="navbar-brand" style="width: 686px; height: 400px">
            <center>
               <p class="title_media">Downhill with Tom Holland</p>  
              <b>How the directors of "The Avengers" wanted to shoot a drama, but they shot a comic</b>
            </center>
          </div>
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-12" style="background-color: #37003c; padding: 50px;">
          <hr style="height:2px;border-width:0;color: white;background-color:white">
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-10" style="background-color: #37003c; color: white;">
          <div class="jumbotron jumbotron-fluid" style="background-color: #37003c; color: white;">
              <h1 class="display-4">What's happening at the box office?</h1>
              <b style="font-family: Montserrat; font-size: 25px; line-height: 50px;color: rgba(255, 255, 255, 0.8); text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">here you can find interesting articles about DiCaprio, Guy Richie and about series "Friends"</b>
          </div>   
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>
        <div class="col-lg-3" style="background-color: #37003c;">
          <center>
          <div class="brd" style="width: 490px; padding: 30px">
            <img src="images_media/One More.png" alt="phoneicon" class="navbar-brand" style="width: 429px; height: 275px">
            <center>
               <p class="title_media">Leonardo DiCaprio will star in the remake of One More</p>  
            </center>
          </div>
          </center>
        </div>
        <div class="col-lg-4" style="background-color: #37003c;">
          <center>
          <div class="brd" style="width: 490px; padding: 30px;">
            <img src="images_media/statham.png" alt="phoneicon" class="navbar-brand" style="width: 429px; height: 275px">
            <center>
               <p class="title_media">China and Guy Ritchie set records, America comes alive</p>
            </center>
          </div>
        </center>
        </div>
        <div class="col-lg-3" style="background-color: #37003c;">
          <center>
          <div class="brd" style="width: 490px; padding: 30px;">
            <img src="images_media/friends.png" alt="phoneicon" class="navbar-brand" style="width: 429px; height: 275px">
            <center>
               <p class="title_media">The Friends final came out 17 years ago. How did you say goodbye to the sitcom?</p>  
            </center>
          </div>
          </center>
        </div>
        <div class="col-lg-1" style="background-color: #37003c;"></div>        
      </div>
  </div>
  <?php require 'footer.php' ?>
</body>
</html>