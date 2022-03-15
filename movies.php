<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Filme</title>
		<meta charset="UTF-8">
    <meta name="keywords" content="filme,actori,recenzii">
    <meta name="description" content="recenzii filme" > 
    <meta name="author" content="Livadariu David & Vultur Andreea"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movies.css">
    <style>
      div {
        float: left;
        margin-left: 30px; 
        margin-top: 5px;
      }
      img {
        width: 185px;
        height: 278px;
      }
      ul {
        margin-bottom: 5px;
      }
      #buton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }
      #buton:hover {
        background-color: #555;
      }
    </style>
	</head>

  <body style="background-color: #033249">
  	<ul>
    	<li><a href="homepage.php">Acasa</a></li>
      <li><a class="active" href="movies.php">Filme</a></li>
      <li><a href="aboutus.php">Despre Noi</a></li>
      <li><a href="contactus.php">Contact</a></li>

      <form method="GET" action="movies.inc.php" autocomplete="off">
      	<input type="text" name="search" placeholder="Cauta un film...">
        <input style="background-color: #111111; color: white; cursor: pointer;" 
               type="submit" value="Cauta">
      </form>
    </ul>

    <button onclick="topFunction()" id="buton" title="Go to top">Sus</button>
    <script>

      var mybutton = document.getElementById("buton");
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/bad-boys-1995/" target="_blank">
             <img src="pictures/badboys.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/bad-boys-ii-2003/" target="_blank">
             <img src="pictures/Bad Boys II.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/bad-boys-for-life-2020/" target="_blank">
             <img src="pictures/badboysforlife.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-maze-runner-2014/" target="_blank">
             <img src="pictures/TheMazeRunner.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/maze-runner-the-scorch-trials-2015/" target="_blank">
             <img src="pictures/MazeRunnerTheScorchTrials.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/maze-runner-the-death-cure-2018/" target="_blank">
             <img src="pictures/MazeRunnerTheDeathCure.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/divergent-2014/" target="_blank">
             <img src="pictures/Divergent.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div >
      <table>
        <tr>
          <a href="https://fsonline.to/film/insurgent-2015/" target="_blank">
             <img src="pictures/Insurgent.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div >
      <table>
        <tr>
          <a href="https://fsonline.to/film/allegiant-2016/" target="_blank">
             <img src="pictures/Allegiant.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-godfather-1972/" target="_blank">
             <img src="pictures/The Godfather.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-godfather-part-ii-1974/" target="_blank">
             <img src="pictures/The Godfather Part II.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-godfather-part-iii-1990/" target="_blank">
             <img src="pictures/The Godfather Part III.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/pirates-of-the-caribbean-the-curse-of-the-black-pearl-2003/" target="_blank">
             <img src="pictures/Pirates of the Caribbean The Curse of the Black.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/pirates-of-the-caribbean-dead-mans-chest-2006/" target="_blank">
             <img src="pictures/Pirates of the Caribbean Dead Man_s Chest.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/pirates-of-the-caribbean-at-worlds-end-2007/" target="_blank">
             <img src="pictures/Pirates of the Caribbean At World_s End.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/pirates-of-the-caribbean-on-stranger-tides-2011/" target="_blank">
             <img src="pictures/Pirates of the Caribbean On Stranger Tides.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/pirates-of-the-caribbean-dead-men-tell-no-tales-2017/" target="_blank">
             <img src="pictures/Pirates of the Caribbean Dead Men Tell No Tales.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/once-upon-a-time-in-hollywood-2019/" target="_blank">
             <img src="pictures/OnceUponATimeInHollywood.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-great-gatsby-2013/" target="_blank">
             <img src="pictures/The Great Gatsby.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
      </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-revenant-2015/" target="_blank">
             <img src="pictures/The Revenant.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/django-unchained-2012/" target="_blank">
             <img src="pictures/Django Unchained.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-wolf-of-wall-street-2013/" target="_blank">
             <img src="pictures/The Wolf of Wall Street.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/titanic-1997/" target="_blank">
             <img src="pictures/Titanic.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/revolutionary-road-2008/" target="_blank">
             <img src="pictures/Revolutionary Road.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/shutter-island-2010/" target="_blank">
             <img src="pictures/Shutter Island.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

   <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/inception-2010/" target="_blank">
             <img src="pictures/Inception.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/casino-royale-2006/" target="_blank">
             <img src="pictures/Casino Royale.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/quantum-of-solace-2008/" target="_blank">
             <img src="pictures/Quantum of Solace.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/skyfall-2012/" target="_blank">
             <img src="pictures/Skyfall.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/spectre-2015/" target="_blank">
             <img src="pictures/Spectre.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/arrival-2016/" target="_blank">
             <img src="pictures/Arrival.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/interstellar-2014/" target="_blank">
             <img src="pictures/Interstellar.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-martian-2015/" target="_blank">
             <img src="pictures/The Martian.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/avatar-2009/" target="_blank">
             <img src="pictures/Avatar.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/red-sparrow-2018/" target="_blank">
             <img src="pictures/RedSparrow.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/black-swan-2010/" target="_blank">
             <img src="pictures/BlackSwan.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/dear-john-2010/" target="_blank">
             <img src="pictures/dearjohn.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/collateral-beauty-2016/" target="_blank">
             <img src="pictures/collateralBeauty.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/eternal-sunshine-of-the-spotless-mind-2004/" target="_blank">
             <img src="pictures/EternalSunshineoftheSpotlessMind.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-painted-veil-2006/" target="_blank">
             <img src="pictures/ThePaintedVeil.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/bohemian-rhapsody-2018/" target="_blank">
             <img src="pictures/BohemianRhapsody.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

     <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-art-of-racing-in-the-rain-2019/" target="_blank">
             <img src="pictures/TheArtOfRacingInTheRain.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/fight-club-1999/" target="_blank">
             <img src="pictures/Fight Club.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/the-irishman-2019/" target="_blank">
             <img src="pictures/theIrishman.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/motherless-brooklyn-2019/" target="_blank">
             <img src="pictures/motherlessBrooklyn.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/knives-out-2019/" target="_blank">
             <img src="pictures/KnivesOut.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/avengers-endgame-2019/" target="_blank">
             <img src="pictures/avengersEndgame.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>
    
    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/parasite-2019/" target="_blank">
             <img src="pictures/Parasite.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>

    <div>
      <table>
        <tr>
          <a href="https://fsonline.to/film/stalker-1979/" target="_blank">
            <img src="pictures/stalker.jpg" alt="Poster Film">
          </a> 
        </tr>
      </table>
    </div>
	</body>
</html>