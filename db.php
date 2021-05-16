<?php
	$connect = mysqli_connect('localhost', 'root', '', 'cinema');

	if (!$connect) {
		echo 'Error';
	}
?>