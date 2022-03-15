<?php

session_start();
require 'connect.php';

if (isset($_SESSION['id'])) {

	if (!empty($_POST['parere']) && isset($_POST['parere'])) {

	$email = $_SESSION['email'];
	$username = $_SESSION['username'];
	$opinion = $_POST['parere'];

	$sql = "INSERT INTO pareri (Username, Parere, Email) 
				VALUES ('$username', '$opinion', '$email')";
	$result = mysqli_query($connect,$sql);

	header("Location: contactus.php?info=OK");

	} 	else  {
		header("Location: contactus.php?info=error");
	}

} else {

if (!empty($_POST['parere']) && isset($_POST['parere']) && !empty($_POST['email']) && isset($_POST['email'])) {

 		$email = $_POST['email'];
		$opinion = $_POST['parere'];

		$sql = "INSERT INTO pareri (Username, Parere, Email) 
				VALUES ('NULL', '$opinion', '$email')";
		$result = mysqli_query($connect,$sql);

		header("Location: contactus.php?info=OK");

 	} else  {
		header("Location: contactus.php?info=error");

 }

}

?>