<?php

session_start();
require 'connect.php';

if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['username']) && isset($_POST['password'])) {
	
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE Username='$username'";
	$result = mysqli_query($connect,$sql);
	$row = $result->fetch_assoc();
	$hash = $row['Parola'];

	$check = password_verify($password, $hash);

	if($check == 0) {
		header("Location: homepage.php?info=wrong");
		die();
	} else {
		$sql = "SELECT * FROM users WHERE Username='$username' AND Parola='$hash'";
		$result = mysqli_query($connect,$sql);

		if(!$row = $result->fetch_assoc()) {
			echo 'Parola sau username-ul nu se potriveste!';
		} else {
			$_SESSION['id']=$row['ID'];
			$_SESSION['name']=$row['Nume'];
			$_SESSION['firstname']=$row['Prenume'];
			$_SESSION['username']=$row['Username'];
			$_SESSION['email']=$row['Email'];
		}

		header("Location: homepage.php");
	}
}


?>