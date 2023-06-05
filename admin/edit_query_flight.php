<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_flight'])){
		$room_type = $_POST['flight_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `flight` SET `flight_type` = '$flight_type', `price` = '$price', `photo` = '$photo_name' WHERE `flight_id` = '$_REQUEST[flight_id]'") or die(mysqli_error());
		header("location:flight.php");
	}
?>