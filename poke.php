<?php
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<meta http-equiv=“Pragma” content=”no-cache”>
<meta http-equiv=“Expires” content=”-1″>
<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>

<!DOCTYPE html>
<html>
    <head>
        <title>
            RBY2K20: <?php echo $_GET['mon'] ?>
        </title>
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
        <link rel="stylesheet" href="css/typecolors.css">
        <link rel="stylesheet" href="css/poke.css">
        <link rel="stylesheet" href="css/dex_table.css">
        <script src="js/tableMaker.js"></script>
        <script src="js/sorttable.js"></script>
        <script src="js/includes.js"></script>

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
            <!--<a class="dropdown-item" href="articles.php">All Articles</a>-->
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

        <div id="content">
            
            <div id="rby" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - RBY OU</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                        <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>

                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>

                    <div class="analysis">
                    <?php echo file_get_contents("Analyses/rbyou/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">
                        
                    </div>
                </div>
            </div>

            <div id="rby1u" class="tabcontent">
            <h2><?php echo $_GET['mon'] ?> - RBY 1U</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                        <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/rby1u/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">
                        
                    </div>
                </div>
            </div>

            <div id="violet" class="tabcontent">
            <h2><?php echo $_GET['mon'] ?> - Violet</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/violet/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>
        

        <div id="nc97" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - NC97</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/nc97/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>

            <div id="nc98" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - NC98</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/nc98/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>

            <div id="nc99" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - NC99</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/nc99/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>


            <div id="petit" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - Petit Cup</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/petit/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>


            <div id="pika" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - Pika Cup</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/pika/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>


            <div id="rrib" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?> - RRIB</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr><tr><td>&nbsp;</td></tr>
                                <tr><td>Tier:&nbsp;&nbsp;&nbsp;</td><td class="tier">OU</td></tr>
                            </table>
                        </div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <table class="stats">
                                <tr><td>HP:&nbsp;&nbsp;&nbsp;</td><td class="hp"></td><td class="hpb"></td></tr>
                                <tr><td>Attack:&nbsp;&nbsp;&nbsp;</td><td class="atk"></td><td class="atkb"></td></tr>
                                <tr><td>Defense:&nbsp;&nbsp;&nbsp;</td><td class="def"></td><td class="defb"></td></tr>
                                <tr><td>Special:&nbsp;&nbsp;&nbsp;</td><td class="spc"></td><td class="spcb"></td></tr>
                                <tr><td>Speed:&nbsp;&nbsp;&nbsp;</td><td class="spe"></td><td class="speb"></td></tr>
                            </table>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="btn-group">

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                RBY2k20 Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'violet')">Violet</a>
                            </div>
                        </div>
                        
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Smogon Tiers
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other Formats
                            </a>
                            <div class="tab dropdown-menu">
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc97')">Nintendo Cup 97</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc98')">Nintendo Cup 98</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'nc99')">Nintendo Cup 99</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'petit')">Petit Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'pika')">Pika Cup</a>
                                <a class="tablinks dropdown-item" id="" onclick="openTab(event, 'rrib')">RRIB</a>
                            </div>
                        </div>

                    </div>
                    <div class="analysis">
                        <?php echo file_get_contents("Analyses/pika/" . $_GET['mon'] . ".html"); ?>
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>
        </div>


        <script>
            function openTab(evt, tabName) 
            {
                console.log(tabName);
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) 
                {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) 
                {
                    //tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                console.log(document.getElementById(tabName).innerHTML);
                try 
                { 
                    //document.getElementById(tabName+"tab").className += " active";
                }
                catch (exception) { /*document.getElementById(tabName+"tab").className += " active";*/ }
            }

            barcolor = (val) =>
            {
                if(val < 50)
                    return "rgb(255,0,0);";
                else if(val < 75)
                    return "rgb(255,127,0);";
                else if(val < 100)
                    return "rgb(180,180,0);";
                else if(val < 125)
                    return "rgb(127,255,0);";
                else
                    return "rgb(0,180,0);";
            }

            colorbarString = (val) =>
            {
                var color = barcolor(val);
                 // border-style: solid; border-width: 1px; border-color: black; 
                return "&nbsp;&nbsp;&nbsp; <span style=\"max-width: 292px; display: inline-block;border-style: solid; border-radius:4px; border-width: 1px; border-color: "+color+";height: 16px; background-color: " 
                    + color + " width: " + (val*2) + "px;\"></span>";
            }

            var meta = "<?php echo $_GET['meta']; ?>";
            var mon = "<?php echo $_GET['mon']; ?>";

           
            
            var rbydata = <?php 
            $url= 'data/RBY2k20Data-RBYPokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ( (strlen($data[$row])>0)){
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var rbydata = new tableScanner(rbydata, "~");
            var rbytable = new table(meta);

            while(rbydata.hasNext())
            {
                var rowData = rbydata.next();
                if(rowData[0] == mon)
                {
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[0].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[0].innerHTML = rowData[10-offset];
                    document.getElementsByClassName("type")[1].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");                    
                    document.getElementsByClassName("tier")[1].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[0].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[0].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[0].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[0].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[0].innerHTML = rowData[8-offset];  
                    document.getElementsByClassName("hp")[1].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[1].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[1].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[1].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[1].innerHTML = rowData[8-offset]; 


                    document.getElementsByClassName("hpb")[0].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[0].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[0].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[0].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[0].innerHTML = colorbarString(rowData[8-offset]);  
                    document.getElementsByClassName("hpb")[1].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[1].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[1].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[1].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[1].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }






            var violetdata = <?php 
            $url= 'data/RBY2k20Data-VioletPokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var violetdata = new tableScanner(violetdata, "~");
            var rbytable = new table(meta);
            var found = false;
            while(violetdata.hasNext())
            {
                var rowData = violetdata.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[2].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[2].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[2].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[2].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[2].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[2].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[2].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[2].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[2].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[2].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[2].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[2].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Violet')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }


            //nc97

            var nc97data = <?php 
            $url= 'data/RBY2k20Data-NC97Pokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var nc97data = new tableScanner(nc97data, "~");
            var rbytable = new table(meta);
            var found = false;
            while(nc97data.hasNext())
            {
                var rowData = nc97data.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[3].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[3].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[3].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[3].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[3].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[3].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[3].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[3].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[3].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[3].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[3].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[3].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Nintendo Cup 97')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

            //nc98

            var nc98data = <?php 
            $url= 'data/RBY2k20Data-NC98Pokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var nc98data = new tableScanner(nc98data, "~");
            var rbytable = new table(meta);
            var found = false;
            while(nc98data.hasNext())
            {
                var rowData = nc98data.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[4].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[4].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[4].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[4].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[4].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[4].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[4].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[4].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[4].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[4].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[4].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[4].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            //nc99
            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Nintendo Cup 98')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

            var nc99data = <?php 
            $url= 'data/RBY2k20Data-NC99Pokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var nc99data = new tableScanner(nc99data, "~");
            var rbytable = new table(meta);
            var found = false;
            while(nc99data.hasNext())
            {
                var rowData = nc99data.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[5].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[5].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[5].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[5].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[5].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[5].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[5].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[5].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[5].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[5].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[5].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[5].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            
            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Nintendo Cup 99')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

//petit

            var petitdata = <?php 
            $url= 'data/RBY2k20Data-PetitPokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var petitdata = new tableScanner(petitdata, "~");
            var rbytable = new table(meta);
            var found = false;
            while(petitdata.hasNext())
            {
                var rowData = petitdata.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[6].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[6].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[6].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[6].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[6].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[6].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[6].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[6].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[6].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[6].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[6].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[6].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Petit Cup')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

            //pika

            var pikadata = <?php 
            $url= 'data/RBY2k20Data-PikaPokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var pikadata = new tableScanner(pikadata, "~");
            var rbytable = new table(meta);
            var found = false;
            while(pikadata.hasNext())
            {
                var rowData = pikadata.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[7].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[7].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[7].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[7].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[7].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[7].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[7].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[7].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[7].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[7].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[7].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[7].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'Pika Cup')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

            //RRIB

            var rribdata = <?php 
            $url= 'data/RBY2k20Data-RRIBPokemon.csv';
            
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var rribdata = new tableScanner(rribdata, "~");
            var rbytable = new table(meta);
            var found = false;
            while(rribdata.hasNext())
            {
                var rowData = rribdata.next();
                if(rowData[0] == mon)
                {
                    found = true;
                    var offset = 0; 
                    if(rowData.length == 10) { offset = 1 };
                    document.getElementsByClassName("type")[8].innerHTML =  "<span class=\""+ rowData[2] + "\">"+ rowData[2] + "</span>"
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");
                    document.getElementsByClassName("tier")[8].innerHTML = rowData[10-offset];

                    document.getElementsByClassName("hp")[8].innerHTML = rowData[4-offset];
                    document.getElementsByClassName("atk")[8].innerHTML = rowData[5-offset]; 
                    document.getElementsByClassName("def")[8].innerHTML = rowData[6-offset]; 
                    document.getElementsByClassName("spc")[8].innerHTML = rowData[7-offset]; 
                    document.getElementsByClassName("spe")[8].innerHTML = rowData[8-offset];  

                    document.getElementsByClassName("hpb")[8].innerHTML = colorbarString(rowData[4-offset]);
                    document.getElementsByClassName("atkb")[8].innerHTML = colorbarString(rowData[5-offset]); 
                    document.getElementsByClassName("defb")[8].innerHTML = colorbarString(rowData[6-offset]); 
                    document.getElementsByClassName("spcb")[8].innerHTML = colorbarString(rowData[7-offset]); 
                    document.getElementsByClassName("speb")[8].innerHTML = colorbarString(rowData[8-offset]);  
                }
            }

            if(!found)
            {
                tablinks = document.getElementsByClassName("tablinks");
                for(var i = 0; i < tablinks.length; i++)
                {
                    if(tablinks[i].innerHTML == 'RRIB Cup')
                    {
                        tablinks[i].className += " hidden";
                    }
                }
            }

           

            window.addEventListener('load', function () 
            { //TODO: Throw this trash in a loop
                openTab(this, meta);

                for(var i = 0; i < document.getElementsByClassName("analysis").length; i++)
                {
                    if (!document.getElementsByClassName("analysis")[i].innerHTML.replace(/\s/g, '').length)
                    {
                        document.getElementsByClassName("analysis")[i].innerHTML = "No analysis found! Maybe head over to the forum and write one? :)";
                    } 
                }
            });


            //////////////////////////POKEMON LEARNSETS//////////////////////////////////

            var rby_ls = <?php 
            $url= 'data/RBY2k20Data-RBYLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;
            
            var rby1u_ls = <?php 
            $url= 'data/RBY2k20Data-TradebackLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;
            
            var violet_ls = <?php 
            $url= 'data/RBY2k20Data-VioletLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;
            
            var nc97_ls = <?php 
            $url= 'data/RBY2k20Data-NC97Learnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var nc98_ls = <?php 
            $url= 'data/RBY2k20Data-NC98Learnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;


            var nc99_ls = <?php 
            $url= 'data/RBY2k20Data-NC99Learnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

        var petit_ls = <?php 
            $url= 'data/RBY2k20Data-PetitLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;


        var pika_ls = <?php 
            $url= 'data/RBY2k20Data-PikaLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;


        var rrib_ls = <?php 
            $url= 'data/RBY2k20Data-RRIBLearnsets.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;





            var rbymoves = <?php 
            $url= 'data/RBY2k20Data-RBYMoves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;
            
            var violetmoves = <?php 
            $url= 'data/RBY2k20Data-VioletMoves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var rgbymoves = <?php 
            $url= 'data/RBY2k20Data-RGBYMoves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var stad0moves = <?php 
            $url= 'data/RBY2k20Data-Stad0Moves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var stadmoves = <?php 
            $url= 'data/RBY2k20Data-StadMoves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;

            var rribmoves = <?php 
            $url= 'data/RBY2k20Data-RRIBMoves.csv';
            if (($handle = fopen($url, "r")) !== FALSE) {
                $result="";
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
                    $totalrows = count($data);
                    for ($row=0; $row<=$totalrows; $row++){
                        if ((strlen($data[$row])>0)) {
                            $result.=$data[$row].'~';
                        }
                    }
                    $result .= '~';
                }
                fclose($handle);
            }
            echo json_encode($result, JSON_HEX_TAG);?>;


             //////////////////////////POKEMON LEARNSETS//////////////////////////////////

             //get learnsets;
            var rby_ls = new tableScanner(rby_ls, "~");
            var rbytable = new table("rby");
            var rbylearnset = [];
            while(rby_ls.hasNext())
            {
                var rowData = rby_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        rbylearnset.push(rowData[i]);
                    }
                }
            }

            var rby1u_ls = new tableScanner(rby1u_ls, "~");
            var rby1utable = new table("rby1u");
            var rby1ulearnset = [];
            while(rby1u_ls.hasNext())
            {
                var rowData = rby1u_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        rby1ulearnset.push(rowData[i]);
                    }
                }
            }

            var violet_ls = new tableScanner(violet_ls, "~");
            var violettable = new table("rby");
            var violetlearnset = [];
            while(violet_ls.hasNext())
            {
                var rowData = violet_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        violetlearnset.push(rowData[i]);
                    }
                }
            }

            var nc97_ls = new tableScanner(nc97_ls, "~");
            var nc97table = new table("nc97");
            var nc97learnset = [];
            while(nc97_ls.hasNext())
            {
                var rowData = nc97_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        nc97learnset.push(rowData[i]);
                    }
                }
            }

            var nc98_ls = new tableScanner(nc98_ls, "~");
            var nc98table = new table("nc98");
            var nc98learnset = [];
            while(nc98_ls.hasNext())
            {
                var rowData = nc98_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        nc98learnset.push(rowData[i]);
                    }
                }
            }

            var nc99_ls = new tableScanner(nc99_ls, "~");
            var nc99table = new table("nc99");
            var nc99learnset = [];
            while(nc99_ls.hasNext())
            {
                var rowData = nc99_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        nc99learnset.push(rowData[i]);
                    }
                }
            }

            var petit_ls = new tableScanner(petit_ls, "~");
            var petittable = new table("petit");
            var petitlearnset = [];
            while(petit_ls.hasNext())
            {
                var rowData = petit_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        petitlearnset.push(rowData[i]);
                    }
                }
            }

            var pika_ls = new tableScanner(pika_ls, "~");
            var pikatable = new table("pika");
            var pikalearnset = [];
            while(pika_ls.hasNext())
            {
                var rowData = pika_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        pikalearnset.push(rowData[i]);
                    }
                }
            }

            var rrib_ls = new tableScanner(rrib_ls, "~");
            var rribtable = new table("rrib");
            var rriblearnset = [];
            while(rrib_ls.hasNext())
            {
                var rowData = rrib_ls.next();
                if(rowData[0] == mon)
                {
                    for(var i = 1; i < rowData.length; i++)
                    {
                        rriblearnset.push(rowData[i]);
                    }
                }
            }



            var rbymoves = new tableScanner(rbymoves, "~");
            header = true;

            //Add moves to correct tables

            while(rbymoves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = rbymoves.next();
                
                if(rbylearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    rbytable.addRow(newRow);;
                }
                newRow = new row();
                newRow.setHeader(header);
                if(rby1ulearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    rby1utable.addRow(newRow);
                }
                header = (false);
            }

            var violetmoves = new tableScanner(violetmoves, "~");
            header = true;

            while(violetmoves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = violetmoves.next();
                if(violetlearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    violettable.addRow(newRow);
                }

                header = (false);
            }

            var nc97moves = new tableScanner(rgbymoves, "~");
            header = true;

            while(nc97moves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = nc97moves.next();
                if(nc97learnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    nc97table.addRow(newRow);
                }

                header = (false);
            }

            var nc98moves = new tableScanner(stad0moves, "~");
            header = true;

            while(nc98moves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = nc98moves.next();
                if(nc98learnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    nc98table.addRow(newRow);
                }

                header = (false);
            }

            
            var nc99moves = new tableScanner(stadmoves, "~");
            header = true;

            while(nc99moves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = nc99moves.next();
                if(nc99learnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    nc99table.addRow(newRow);
                }

                header = (false);
            }

            var petitmoves = new tableScanner(stadmoves, "~");
            header = true;

            while(petitmoves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = petitmoves.next();
                if(petitlearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    petittable.addRow(newRow);
                }

                header = (false);
            }

            var pikamoves = new tableScanner(stadmoves, "~");
            header = true;

            while(pikamoves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = pikamoves.next();
                if(pikalearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    pikatable.addRow(newRow);
                }

                header = (false);
            }

            var rribmoves = new tableScanner(rribmoves, "~");
            header = true;

            while(rribmoves.hasNext())
            {
                var newRow = new row();
                newRow.setHeader(header);
                var rowData = rribmoves.next();
                if(rriblearnset.includes(rowData[0]) || header)
                {
                    for (var i = 0; i < rowData.length; i++)
                    {
                        if(i != 1 && i != 6)
                        {
                            newRow.addCell(rowData[i]);
                        }
                    }
                    newRow.addAtr(0, "style", "text-align: left;");
                    newRow.addAtr(1, "class", newRow.cells[1]);
                    rribtable.addRow(newRow);
                }

                header = (false);
            }
            
            document.getElementsByClassName("learnset")[0].innerHTML = rbytable.print();
            document.getElementsByClassName("learnset")[1].innerHTML = rby1utable.print();
            document.getElementsByClassName("learnset")[2].innerHTML = violettable.print();
            document.getElementsByClassName("learnset")[3].innerHTML = nc97table.print();
            document.getElementsByClassName("learnset")[4].innerHTML = nc98table.print();
            document.getElementsByClassName("learnset")[5].innerHTML = nc99table.print();
            document.getElementsByClassName("learnset")[6].innerHTML = petittable.print();
            document.getElementsByClassName("learnset")[7].innerHTML = pikatable.print();
            document.getElementsByClassName("learnset")[8].innerHTML = rribtable.print();
        </script>
    </body>
</html>
