<!DOCTYPE html>
<html>
	<head>
		<title>Filme cautate</title>
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

$result = null;

if(!empty($_GET['search']) && isset($_GET['search'])) {

	$searchedmovie = $_GET['search'];
	$lenght = strlen($searchedmovie);
	$sql = "SELECT * FROM filme WHERE LEFT('$searchedmovie',$lenght)=LEFT(`Nume Film`,$lenght)"; 
	$result = mysqli_query($connect,$sql);

	if(mysqli_num_rows($result)>0) {

		echo "<table id='movies'>
				<tr>
					<th>Poster</th>
					<th>Nume Film</th>
					<th>Actori</th>
					<th>Data aparitiei</th>
					<th>Box Office</th>
					<th>Rating</th>
					<th>Reviews</th>
				</tr>";
		while ($row = $result->fetch_assoc() ) {
			$film = htmlentities($row['Nume Film'], ENT_QUOTES);
			echo "<tr>";
			echo "<td><img style='width: 185px;height: 278px' src='pictures/". $row['poza']. "' alt='Poster Film'></td>";
  			echo "<td>" . $row['Nume Film'] . "</td>";
 		 	echo "<td>" . $row['Actori'] . "</td>";
  			echo "<td>" . $row['Data aparitiei'] . "</td>";
  			echo "<td>" . $row['Box Office'] . "</td>";
  			echo "<td>" . $row['Rating'] . "</td>";
  			echo "<td><form method='GET' action='reviews.inc.php'>
  						<input style='cursor: pointer;' type='submit' name='moviename' value='$film'>	
  					 </form></td>";
  			echo "</tr>";
		}
		echo "</table>";
	} else 
		 echo '<p style="text-align: center; color: red; font-size: 20px;">Filmul nu este in baza de date!</p>';
}

?>








