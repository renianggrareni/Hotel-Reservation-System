<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `mitra` WHERE `mitra_id` = '$_REQUEST[mitra_id]'") or die(mysqli_error());
	 header("location: mitra.php");