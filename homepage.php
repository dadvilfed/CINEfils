<?php
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Acasa</title>
		<meta charset="UTF-8">
    <meta name="keywords" content="filme,actori,recenzii">
    <meta name="description" content="recenzii filme" > 
    <meta name="author" content="Livadariu David & Vultur Andreea"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
	</head>
	<body style="background-image: url(pictures/poster.jpg);">
		<ul>
       <li><a class="active" href="homepage.php">Acasa</a></li>
       <?php
       		if (!isset($_SESSION['id'])) {
       			echo '<li><a href="signup.php">Sign Up</a></li>';
       		}
       ?>
       <li><a href="movies.php">Filme</a></li>
       <li><a href="aboutus.php">Despre Noi</a></li>
       <li><a href="contactus.php">Contact</a></li>
     </ul>

     <div class="logo"> 
       <img src="pictures/LOGO.jpg"
            alt="LOGO">
     </div>

     <?php
        if (!isset($_SESSION['id'])) {
        echo '
        	<div class="login">
       			<div class="container">
         			<h1>Bine ai venit!</h1>
         			  <form method="POST" action="login.inc.php">
           				  <input type="text" name="username" placeholder="username"><br>
           				  <input type="password" name="password" placeholder="parola"><br>
           				  <input id="submit" type="submit" value="Log in"><br>    
          			 </form>
       			</div>
     		</div>
     		';
      } else { 
      	echo '<p style="text-align: center; font-family: timesnewroman; font-size: 50px; color: red; background-color: #111111;">Bine ai venit '.$_SESSION['username'].' !';
      	echo '
      		<form action="logout.inc.php" style="text-align: center;">
      			<input type="submit" value="Log out">
      		</form>';
      }
     ?>
	</body>
</html>