<?php

require 'connect.php';

if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) 
   && !empty($_POST['password']) && !empty($_POST['email']) 
   && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['username']) 
   && isset($_POST['password']) && isset($_POST['email'])) {

	$name = $_POST['nume'];
	$firstname = $_POST['prenume'];
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];
	$email = $_POST['email'];

	$password_hashed = password_hash($password, PASSWORD_DEFAULT);

	$sql = "SELECT Username FROM users WHERE Username='$username'";
    $result = mysqli_query($connect,$sql); 
    $check = mysqli_num_rows($result);

    if($check > 0) {
    	header("Location: signup.php?info=exist");
    	die();
    } else {
    	$sql = "INSERT INTO users (Nume, Prenume, Username, Parola, Email) 
				VALUES ('$name','$firstname','$username','$password_hashed','$email')";
		$result = mysqli_query($connect,$sql);

		header("Location: signup.php?info=OK");
    }
	
} else  {
	header("Location: signup.php?info=error");
}


?>