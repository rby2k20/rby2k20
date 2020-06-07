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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
                                <a class="dropdown-item" href="guides.php">All Tiers</a>
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
                            <a class="dropdown-item" href="https://www.youtube.com/channel/UC2On9uqPj8rcUVoaeyhn0LA">Youtube</a>
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
        


        <div id="content">
            
            <div id="rby" class="tabcontent">
                <h2><?php echo $_GET['mon'] ?></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                        <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr>
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
                    <div class="tab btn-group">
                        <button class="tablinks" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</button>
                        <button class="tablinks" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</button>
                        <button class="tablinks" id="" onclick="openTab(event, 'violet')">Violet</button>
                    </div>
                    <div class="analysis">
                    
                    </div>
                    <div class="learnset dex">
                        
                    </div>
                </div>
            </div>

            <div id="rby1u" class="tabcontent">
            <h2><?php echo $_GET['mon'] ?></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                        <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr>
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
                    <div class="tab btn-group">
                        <button class="tablinks" id="" onclick="openTab(event, 'rby')">RBY OU</button>
                        <button class="tablinks" id="rby1utab" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</button>
                        <button class="tablinks" id="" onclick="openTab(event, 'violet')">Violet</button>
                    </div>
                    <div class="analysis">
                        
                    </div>
                    <div class="learnset dex">
                        
                    </div>
                </div>
            </div>

            <div id="violet" class="tabcontent">
            <h2><?php echo $_GET['mon'] ?></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11 col-md-5 pokepanel text-center">
                            <img class="sprite" src="images/sprites/<?php echo strtolower($_GET['mon']); ?>.png">
                            <table>
                                <tr><td>Type:&nbsp;&nbsp;&nbsp;</td><td class="type">Normal</td></tr>
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
                    <div class="tab btn-group">
                        <button class="tablinks" id="" onclick="openTab(event, 'rby')">RBY OU</button>
                        <button class="tablinks" id="" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</button>
                        <button class="tablinks" id="violettab" onclick="openTab(event, 'violet')">Violet</button>
                    </div>
                    <div class="analysis">
                    
                    </div>
                    <div class="learnset dex">

                    </div>
                </div>
            </div>
        </div>


        <script>
            function openTab(evt, tabName) 
            {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) 
                {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) 
                {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                try 
                { 
                    document.getElementById(tabName+"tab").className += " active";
                }
                catch (exception) { document.getElementById(tabName+"tab").className += " active"; }
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1378406483&single=true&output=csv';
            
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
                                                                                + ((rowData.length == 10)? " " :  " <span class=\""+ rowData[3] + "\">"+ rowData[3] + "</span>");                    document.getElementsByClassName("tier")[1].innerHTML = rowData[10-offset];
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=269848004&single=true&output=csv';
            
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
                tablinks[2].className += " hidden";
                tablinks[5].className += " hidden";
                tablinks[7].className += " hidden";
            }



            window.addEventListener('load', function () 
            {
                openTab(this, meta);
                console.log('Analyses/rbyou/' + mon + ".html");
                fetch('Analyses/rbyou/' + mon + ".html")
                    .then(response => {if(response.ok) return response.text(); else return "<p>No analysis found! Maybe head over to the forum and write one? :)</p>"})
                    .then((data) => {
                            document.getElementsByClassName("analysis")[0].innerHTML = data;
                    });

                fetch('Analyses/rby1u/' + mon + ".html")
                    .then(response => {if(response.ok) return response.text(); else return "<p>No analysis found! Maybe head over to the forum and write one? :)</p>"})
                    .then((data) => {
                            document.getElementsByClassName("analysis")[1].innerHTML = data;
                    });

                fetch('Analyses/violet/' + mon + ".html")
                    .then(response => {if(response.ok) return response.text(); else return "<p>No analysis found! Maybe head over to the forum and write one? :)</p>"})
                    .then((data) => {
                            document.getElementsByClassName("analysis")[2].innerHTML = data;
                    });
                
            });


            //////////////////////////POKEMON LEARNSETS//////////////////////////////////

            var rby_ls = <?php 
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1849607014&single=true&output=csv';
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=44344892&single=true&output=csv';
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=617265908&single=true&output=csv';
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1181236501&single=true&output=csv';
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
            $url= 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=2873338&single=true&output=csv';
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
            var violettable = new table("violet");
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
            
            document.getElementsByClassName("learnset")[0].innerHTML = rbytable.print();
            document.getElementsByClassName("learnset")[1].innerHTML = rby1utable.print();
            document.getElementsByClassName("learnset")[2].innerHTML = violettable.print();
        </script>
    </body>
</html>
