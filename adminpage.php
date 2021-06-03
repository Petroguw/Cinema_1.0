<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>films</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="Main.css">
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #37003c;
  color: white;
}
</style>
    
</head>
<body>
	<?php require 'header.php' ?>
	<?php require_once 'db.php' ?>
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="height: 30px;"></div>
            <div class="col-lg-12">
                <div class="jumbotron" style="background-color: #37003c; color: white;">
                    <h1 class="display-4">List of films</h1>
                    <p class="lead">Here are list of top films in our history</p>
                    <hr class="my-4">
                    <p>You can also check some other tops with films</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
	<br>
	<table id="customers">
  	<tr>
    <th>ID</th>
    <th>Theatre ID</th>
		<th>Title</th>
		<th>year</th>
		<th>genre</th>
    <th>Description</th>
		<th>rating</th>
    <th>Image</th>
    <th>Video_url</th>
	</tr>
		<?php
			$films = mysqli_query($connect, "SELECT * FROM `films`") ;
			$films = mysqli_fetch_all($films);
			foreach ($films as $film) {
				?>
				<tr class="row2">
					<td><?= $film[0] ?></td>
          <td><?= $film[1] ?></td>
          <td><?= $film[2] ?></td>
          <td><?= $film[3] ?></td>
          <td><?= $film[4] ?></td>
          <td><?= $film[5] ?></td>
          <td><?= $film[6] ?></td>
          <td><?= $film[7] ?></td>
          <td><?= $film[8] ?></td>
					<!-- <td><a href="updateWeb.php?id=<?= $film[0] ?>">Update</a></td> -->
				</tr>
				<?php
			}
		?>
	</table>
	<div class="row">
    <div class="col-lg-6">
        <div class="jumbotron" style="background-color: white; color: black;">
            <h1 class="display-4">Add films</h1>
            <hr class="my-4">
                <form action="create.php" method="post" style="margin: 10px;">
                <p>Theatre ID</p>
                <input type="number" name="t_id" style="border: 1px solid black">
                <p>Film Title</p>
                <input type="text" name="name" style="border: 1px solid black">
                <p>Year</p>
                <input type="number" name="Year" style="border: 1px solid black; width: 80%;"> 
                <p>Genre</p>
                <input type="text" name="genre" style="border: 1px solid black">
                <p>Description</p>
                <input type="text" name="desc" style="border: 1px solid black">
                <p>Rating</p>
                <input type="text" name="rating" style="border: 1px solid black">
                <p>Image</p>
                <input type="text" name="image" style="border: 1px solid black">
                <p>Video_url</p>
                <input type="text" name="video_url" style="border: 1px solid black">
                <br> <br>
                <input type="submit" value="Add new films" style="background-color: #37003c; color: white; width: 80%;">
            </form>
            <br>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="jumbotron" style="background-color: white; color: black;">
            <h1 class="display-4">Delete films</h1>
            <hr class="my-4">
                <form action="delete.php" method="get" style="margin: 10px; width: 98%">
                  <p>ID</p>
                  <input type="number" name="id" style="border: 1px solid black; width: 100%">
                  <input type="submit" value="Delete film" style="background-color: #37003c; color: white;">
                </form>
    
            <br>
        </div>
    </div>
    </div>
	<?php require 'footer.php' ?>
  </div>
</body>
</html>
