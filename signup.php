<?php
    session_start();
    if(isset($_SESSION['id'])) {
      header("Location: homepage.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body style="background-image: url(pictures/poster.jpg);">
  <ul>
       <li><a style=" display: block; color: white; text-align: center; padding: 16px; text-decoration: none;" href="homepage.php">Acasa</a></li>
  </ul>
	<div class="login">
       <div class="container">
         <h1>Sign Up</h1>
           <form method="POST" action="signup.inc.php">
             <input type="text" name="nume" placeholder="nume"><br>
             <input type="text" name="prenume" placeholder="prenume"><br>
             <input type="text" name="username" placeholder="username"><br>
             <input type="password" name="password" placeholder="parola"><br>
             <input type="email" name="email" placeholder="email"><br>
             <input id="submit" type="submit" value="Sign Up"><br>    
           </form>
           <?php
              if(isset($_GET['info']) && $_GET['info'] == 'OK'){
                echo '<p style="text-align: center; color: green; font-size: 20px;">Contul a fost creat!</p>';
              } elseif (isset($_GET['info']) && $_GET['info'] == 'error') {
                echo '<p style="text-align: center; color: red; font-size: 20px;">Completeaza toate campurile!</p>';
              } elseif (isset($_GET['info']) && $_GET['info'] == 'exist') {
                echo '<p style="text-align: center; color: red; font-size: 20px;">Username-ul exista deja!</p>';
              }
           ?>
           
       </div>
     </div>
</body>
</html>