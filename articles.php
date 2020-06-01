<!DOCTYPE html>
<html>
    <head>
    <title>
            RBY2k20: Guides
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/nav.css">
        <script src="js/includes.js"></script>
        <script src="js/articles.js"></script>
        <script src="js/tools.js"></script>
        <link rel="stylesheet" href="css/article.css">
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
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Articles
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="articles.php?tag=rbyou">RBY OU</a>
                                <a class="dropdown-item" href="articles.php?tag=rby1u">RBY 1U</a>
                                <a class="dropdown-item" href="articles.php?tag=violet">Violet</a>
                                <a class="dropdown-item" href="articles.php">All Tiers</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Participate
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://discord.gg/GYFJmfm">Discord</a>
                            <a class="dropdown-item" href="https://rby2k20.freeforums.net/">Forum</a>
                            <a class="dropdown-item" href="http://pokemonperfect.psim.us/">Pokemon Showdown Sever</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tools
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="calc.html">Calculator</a>
                            </div>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tournament Results
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="tours.html?t=rbyou">Discord</a>
                              <a class="dropdown-item" href="tours.html?t=rby1u">Forum</a>
                              <a class="dropdown-item" href="tours.html?t=violet">Pokemon Showdown Sever</a>
                            </div>
                        </li>-->
                      </ul>
                    </div>
                  </nav>
        
                <!--NAVBAR-->
        

        <div id="articles" class="container">
            
        </div>

        <script>
                var files = <?php $out = array();
                foreach (glob('articles/*.html') as $filename) {
                    $p = pathinfo($filename);
                    $out[] = $p['filename'];
                }
                echo json_encode($out); ?>;

                var articles = [];
                var output = "";

                for(var i = 0; i < files.length; i++)
                {
                    articles.push(new article(files[i]));
                }

                setTimeout(function waiting() {

                    for(var i = 0; i < articles.length; i++)
                    { 
                        output += "<a href=\"read.php?article=" + articles[i].filename +"\"><div class=\"row\">" 
                        output += mkBtstpDiv(articles[i].title, "col-12 col-md-5");
                        output += mkBtstpDiv(articles[i].author, "col-12 col-md-2");
                        output += mkBtstpDiv(articles[i].day + " " + articles[i].month + " " + articles[i].year + "  &nbsp;&nbsp;&nbsp;"+ articles[i].tier,"col-12 col-md-5")  ;
                        output += "</div></a>";
                    }

                    console.log(output);
                    document.getElementById("articles").innerHTML = output;
                }, 500);

                
        </script>
    </body>
</html>