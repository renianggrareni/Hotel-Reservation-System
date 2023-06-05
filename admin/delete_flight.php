<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `flight` WHERE `flight_id` = '$_REQUEST[flight_id]'") or die(mysql_error());
	header("location:flight.php");
?>