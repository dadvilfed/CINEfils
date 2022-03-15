<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="UTF-8">
    <meta name="keywords" content="filme,actori,recenzii">
    <meta name="description" content="recenzii filme" > 
    <meta name="author" content="Livadariu David & Vultur Andreea"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus.css">
	</head>
<body>
	<ul>
    <li><a href="homepage.php">Acasa</a></li>
    <li><a href="movies.php">Filme</a></li>
    <li><a href="aboutus.php">Despre Noi</a></li>
    <li><a class="active" href="contactus.php">Contact</a></li>
  </ul>

<div class="login">

<?php 

  if (isset($_SESSION['id'])) {
        echo '
          
            <div class="container">
              <h1>Spune-ne ce gândeşti!</h1>
                <form method="POST" action="contactus.inc.php">
                    <textarea style="text-indent: 5px; font-family: timesnewroman;" 
                              name="parere" rows="10" cols="41" max="1000" placeholder="Părerea ta..."></textarea>
                    <input id="submit" type="submit" value="Trimite"><br>    
                 </form>
                <h1>Urmăreşte-ne şi pe Instagram!
                  <a href="https://www.instagram.com/_cinefils/" target="_blank">
                    <img style="width: 50px;height: 50px;" src="pictures/instagram.jpg" alt="instagram">
                  </a>
                </h1> 
            </div>
        
        ';
      } else {
        echo '
          
            <div class="container">
              <h1>Spune-ne ce gândeşti!</h1>
                <form method="POST" action="contactus.inc.php">
                    <input type="text" name="email" placeholder="email"><br>
                    <textarea style="text-indent: 5px; font-family: timesnewroman; margin-bottom: 20px;" 
                              name="parere" rows="10" cols="41" max="1000" placeholder="Părerea ta..."></textarea><br>
                    <input id="submit" type="submit" value="Trimite"><br>    
                 </form>
              <h1>Urmăreşte-ne şi pe Instagram!
                <a href="https://www.instagram.com/_cinefils/" target="_blank">
                   <img style="width: 50px;height: 50px;" src="pictures/instagram.jpg" alt="instagram">
                 </a>
              </h1>
            </div>
      
        ';
      }
 
      if(isset($_GET['info']) && $_GET['info'] == 'OK') {
       echo '<p style="text-align: center; color: green; font-size: 20px;">Mulţumim pentru timpul acordat!</p>';
       } elseif (isset($_GET['info']) && $_GET['info'] == 'error') {
         echo '<p style="text-align: center; color: red; font-size: 20px;">Completaţi câmpul!</p>';
       }

 ?>

 </div>


</body>
</html>