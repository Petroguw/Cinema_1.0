<?php
    require('connect.php');
?>

 <?
   if (session_status()==PHP_SESSION_NONE)
{
session_start();}
   require_once "product.php"; 
$resultArr= getProducts();
?>
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
	<div class="contiener">			    
		<div class="col-md-6 left-box">   			 
			<h2 class="hikinogo_zagolovki"><a href="films.php">Attak on Titan </a> 
			</h2>
			<div class="imdbs" title="Рейтинг на IMBD" alt="Рейтинг на IMBD">IMBD 7.3</div>			    
			    <div class="cont">HD (720p)</div>
			  <div id="27331" style="display:inline;">
			    <div class="wrapper2 exmpl"> 
			    <div class="poster" style="float:left;width:200px;height:300px;object-fit: cover">
			     <img src="aot.jpg" style="width:150px;">
			    </div>
				</div>
				</a><br>
			   Attack on Titan (Japanese: 進撃の巨人, Hepburn: Shingeki no Kyojin) is a Japanese dark fantasy anime television series adapted from the manga of the same name by Hajime Isayama that premiered on April 7, 2013.
			   <br><br>
					<b>Year:</b> 2013<br>
			        <b>Country:</b> Japan<br>
			        <b>Jenre:</b> Anime<br>
			      
			        <b>Duration:</b> 28 min.<br><br>

			</div>

			<div class="quote">			         
			   <center> Просмотров: 1 394 | <a href="#">Комментариев: 0</a> |  </center>  
			</div>     
			</div>
			</div>
				</div>
	<?php
		$sql = "SELECT id, mname, description, year, genre FROM movies";
		$result = $conn->query($sql);
		echo '<table >';
		echo '<tr>';
		        echo "<th>mname</th>";
		        echo "<th>description</th>";
		        echo "<th>year</th>";
		        echo "<th>genre</th>";
		echo '</tr>';

		while($row = mysqli_fetch_array($result))
		{
		    echo "<tr>";

		        echo "<td>" . $row['mname'] . "</td>";
		        echo "<td>" . $row['description'] . "</td>";
		        echo "<td>" . $row['year'] . "</td>";
		        echo "<td>" . $row['genre'] . "</td>";
		        echo '<td><a href="'.'update.php?productid='.$row['productid'].'">Update</a></td>';
		        echo '<td><a href="'.'delete.php?productid='.$row['productid'].'">Delete</a></td>';
		        // echo '<td><a href="'.'delete.php?productid='.$row['productid'].'>Delete</a></td>';
		        // echo "<td><a href='delete.php?productid=".$row['ProductID']."'>Delete</a></td>";
		        //  echo "<td><a href='delete.php?productid=".$row['ProductID']."'>Delete</a></td>";
		    echo "</tr>";

		}
		 
		// foreach ($result as $key => $row) {
		//     foreach ($row as $k => $r) {
		//         echo "<tr>";
		//         echo "<td>$k</td>"; // Get index.
		//         echo "<td>$</td>"; // Get value.
		//         echo "</tr>";
		//     }
		// }

		echo '</table>';
		?>
	<?php
	require 'footer.php'
	?>

</body>

</html>