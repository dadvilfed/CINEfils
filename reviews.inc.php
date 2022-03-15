<!DOCTYPE html>
<html>
	<head>
		<title>Reviews</title>
		<meta charset="UTF-8">
    	<meta name="keywords" content="filme,actori,recenzii">
    	<meta name="description" content="recenzii filme" > 
   		<meta name="author" content="Livadariu David & Vultur Andreea"> 
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<style> 
    		ul {
  				list-style-type: none;
 			    margin: 0;
  				padding: 0;
  				overflow: hidden;
  				background-color: #333333;
				}
			li {
  				float: left;
				}
			li a {
  				display: block;
  				color: white;
  				text-align: center;
  				padding: 16px;
  				text-decoration: none;
				}
			li a:hover:not(.active) {
  				background-color: #111111;
				}
			#movies {
				margin-top: 10px;
				background-color: grey;
  				font-family: timesnewroman, timesnewroman, timesnewroman;
  				border-collapse: collapse;
  				width: 100%;
				}
			#movies td, #movies th {
  				border: 1px solid #ddd;
  				padding: 8px;
  				text-align: center;
				}
			#movies th {
  				padding-top: 12px;
  				padding-bottom: 12px;
  				text-align: center;
  				background-color: #4CAF50;
  				color: black;
				}	
    	</style>
	</head>

<body style="background-color: #033249">
  	<ul>
    	<li><a href="movies.php">Filme</a></li>
    </ul>
</body>
</html>
<?php  

session_start();
require 'connect.php';

$moviename = mysqli_real_escape_string($connect , $_GET['moviename']);
$sql = "SELECT * FROM filme WHERE `Nume Film`='$moviename'";
$result = mysqli_query($connect,$sql);
$row = $result->fetch_assoc();

$sql2 = "SELECT * FROM review WHERE `Nume Film`='$moviename'";
$result2 = mysqli_query($connect,$sql2);

	
  		echo "
            <aside>
            <img style='margin-top: 10px; width: 185px;height: 278px' src='pictures/". $row['poza']. "' alt='Poster Film'>
            </aside>";
      echo "
            <section >
              <table id='movies'>
              <tr>
                <th>Username</th>
                <th>Review</th>
              </tr>"; 
      while($row2 = $result2->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>". $row2['Username'] ."</td>";
        echo "<td>". $row2['Review'] . "</td>";
        echo "</tr>";
      }
      echo "</table>
            </section>";

if (isset($_SESSION['id'])) {
  echo '
          <div class="login">
            <div class="container">
              <h1>Lasa un review!</h1>
                <form method="POST">
                    <textarea style="text-indent: 5px; font-family: timesnewroman;" 
                              name="review" rows="10" cols="41" max="1000" placeholder="Review..."></textarea>
                    <input id="submit" type="submit" value="Trimite"><br>    
                 </form>
            </div>
        </div>
        ';

  if(isset($_POST['review']) && !empty($_POST['review'])) {
    
    $username = $_SESSION['username'];
    $review = $_POST['review'];
    $sql = "INSERT INTO review (Username, `Nume Film`, Review) 
        VALUES ('$username', '$moviename', '$review')";
    $result = mysqli_query($connect,$sql);
  }
  
}
?>
