<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `user` WHERE `user_id` = '$_REQUEST[user_id]'") or die(mysqli_error());
	 header("location: user.php");