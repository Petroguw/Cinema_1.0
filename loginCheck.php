<?php
	session_start();
	require_once 'db.php';

	$login = $_POST['login'];
	$password = md5($_POST['password']);

	$check_user	= mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$password'");
	if(mysqli_num_rows($check_user) > 0){
		$user = mysqli_fetch_assoc($check_user);

		$_SESSION['user'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"email" => 	$user['email']
		];

		header('Location: ../CodingLab/profile.php');
	}
	else{
		$_SESSION['message'] = 'Неверный логин или пароль'; 
		header('Location: ../CodingLab/login.php');
	}
?>