<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account_mitra'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("UPDATE `mitra` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `mitra_id` = '$_REQUEST[mitra_id]'") or die(mysqli_error());
		header("location:mitra.php");
	}	