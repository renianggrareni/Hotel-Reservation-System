<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account_user'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("UPDATE `user` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `user_id` = '$_REQUEST[user_id]'") or die(mysqli_error());
		header("location:user.php");
	}	