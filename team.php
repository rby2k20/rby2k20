<?php
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>RB2k20: </title>
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/articlesandguides.css">
        <link rel="stylesheet" href="css/team.css">
        <script src="js/includes.js"></script>
        <script src="js/teams.js"></script>
        <script src="js/reader.js"></script>
    </head>
    <body>

<!--NAVBAR-->
<div id="navLogo">
  <img src="images/FinalLogo.png">
</div>

<nav id="nav" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a id="brand" class="navbar-brand" href="index.html">RBY2K20</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pokedex
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pokedex.php?meta=rby">RBY OU</a>
              <a class="dropdown-item" href="pokedex.php?meta=rby1u">RBY 1U</a>
              <a class="dropdown-item" href="pokedex.php?meta=violet">Violet</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc97">Nintendo Cup 97</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc98">Nintendo Cup 98</a>
              <a class="dropdown-item" href="pokedex.php?meta=nc99">Nintendo Cup 99</a>
              <a class="dropdown-item" href="pokedex.php?meta=petit">Petit Cup</a>
              <a class="dropdown-item" href="pokedex.php?meta=pika">Pika Cup</a>
              <a class="dropdown-item" href="pokedex.php?meta=rrib">RRIB</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="articles.php">All Articles</a>
            <a class="dropdown-item" href="articles.php?tag=survey">Surveys</a>
            <!--<a class="dropdown-item" href="articles.php?tag=interviews">Interviews</a>-->
        </div>
    </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guides
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="guides.php?tag=rbyou">RBY OU</a>
              <a class="dropdown-item" href="guides.php?tag=rby1u">RBY 1U</a>
              <a class="dropdown-item" href="guides.php?tag=violet">Violet</a>
              <a class="dropdown-item" href="guides.php?tag=other">Other Formats</a>
              <a class="dropdown-item" href="guides.php">All Tiers</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="teams.php?tag=rbyou">RBY OU</a>
            <a class="dropdown-item" href="teams.php?tag=rby1u">RBY 1U</a>
            <a class="dropdown-item" href="teams.php?tag=violet">Violet</a>
            <a class="dropdown-item" href="teams.php">All Tiers</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tournaments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://rby2k20.freeforums.net/#category-4">Forum Tours</a>
        </div>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Participate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://discord.gg/GYFJmfm">Discord</a>
          <a class="dropdown-item" href="https://rby2k20.freeforums.net/">Forum</a>
          <a class="dropdown-item" href="http://rby.psim.us/">Pokemon Showdown Sever</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UC2On9uqPj8rcUVoaeyhn0LA">Youtube</a>
        </div>
      </li>
  <!--    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tools
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="calc.html">Calculator</a>
          </div>
      </li> -->
    </ul>
  </div>
</nav>

<!--NAVBAR-->
        

        <span style="display: none;" id="buffer"><?php   echo file_get_contents($_GET['article'] . ".html"); ?></span>

        <div id="flags"></div>
        <article id="main">
            Loading
        </article>

        <script>
            var data = document.getElementById("buffer").innerHTML;
            document.getElementById("buffer").innerHTML = "";

            var content = new team(data, '<?php echo $_GET['article']; ?>');
            
            if(content.content.length > 1)
              {
                for(var i = 0; i < content.content.length; i++)
                {
                  document.getElementById("flags").innerHTML +=  "<img src=\"images/flags/" + content.content[i].id + ".png\">";
                }
                for(var i = 0; i < content.content.length; i++)
                {
                  document.getElementById("flags").children[i].flagnum = i;
                  document.getElementById("flags").children[i].addEventListener("click", function(evt){ loadarticle(evt.currentTarget.flagnum); });
                  console.log(document.getElementById("flags").children[i]);
                  document.getElementById("flags").children[0].click();
                }
              }
              loadarticle(0);

            function toggleimportable()
            {
                console.log(document.getElementById("importable").style.display)
                document.getElementById("importable").style.display =
                (document.getElementById("importable").style.display == "")?  "block" : "";
            }

            
            function loadarticle(i) 
            {   
              console.log("loading" + i);
                document.title = "RBY2k20: " + content.title;
                
                document.getElementById("main").innerHTML = content.content[i].innerHTML;
                letsread();
            }
      
        </script>
 
    </body>
</html>


