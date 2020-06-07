<!DOCTYPE html>
<html>
    <head>
        <title>
            RBY2k20: Pokedex
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/nav.css">
        <script src="js/tableMaker.js"></script>
        <script src="js/sorttable.js"></script>
        <script src="js/includes.js"></script>
        <link rel="stylesheet" href="css/dex_table.css">
        <style>
          #dex table:first-child tr td:first-child:hover
            {
                background-color: #ddd;
            }
        </style>

        <script>
          //Rby pokemon https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1378406483&single=true&output=csv
          //Rby moves https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1181236501&single=true&output=csv
          //Violet pokemon https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=269848004&single=true&output=csv
          //Violet moves https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=2873338&single=true&output=csv

          var dex = document.getElementById("dex");
          var meta = "<?php echo $_GET['meta']; ?>";

          var Pokedata = <?php 
          
                $meta = $_GET['meta'];
                $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1378406483&single=true&output=csv';
                
                if(strcmp($meta,'violet') == 0)
                {
                  $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=269848004&single=true&output=csv';
                }
                if(strcmp($meta,'rby1u') == 0)
                {
                  $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=438832659&single=true&output=csv';
                }

                
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

        var Movedata = <?php 
          
          $meta = $_GET['meta'];
          $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=1181236501&single=true&output=csv';
          
          if(strcmp($meta,'violet') == 0)
          {
            $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQnysmRk4eyn-zfjjQtPuNMuewVweWAoqxyUXOFJEx2dcBiMrvFmjiw5xpgDBQetnwyITzDIKRV2yj_/pub?gid=2873338&single=true&output=csv';
          }

          
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

          var Pokedata = new tableScanner(Pokedata, "~");
          var Movedata = new tableScanner(Movedata, "~");

          var pokeTable = new table(meta);
          var moveTable = new table(meta);
          var header = true;

           statHeat = (length, idx) =>
           {
            if(length == 10)
              idx = idx-1;
            if(!header) 
            {
                    var num = (idx == 9 || (length == 10 && idx == 8)) ? parseInt(rowData[idx]/5) : parseInt(rowData[idx]);
                    var red = 0;
                    var green = 0;
                    var blue = 0;

                    if(num <=30){
                        red = 180;
                        green = 28;
                        blue = 11;
                    }
                    else if(num < 60){
                        red = 180 + (16*(num % 30)/15);
                        green = 28 + (104*(num % 30)/30);
                        blue = 11 + ((num % 30)/10);
                    }
                    else if(num == 60){
                        red = 222;
                        green = 132;
                        blue = 14;
                    }
                    else if(num < 90){
                        red = 222 + (14*(num % 30)/15);
                        green = 132 + (33*(num % 30)/10);
                        console.log("green: " + green + "  Num: " + num);
                        blue = 14 + ((num % 30)/5);
                    }
                    else if(num == 90){
                        red = 250;
                        green = 231;
                        blue = 20;
                    }
                    else if(num < 120){
                        red = 250 - (51*(num % 30)/15);
                        green = 231 + (4*(num % 30)/5);
                        blue = 20 + ((num % 30)/5);
                    }
                    else if(num == 120){
                        red = 148;
                        green = 255;
                        blue = 26;
                    }
                    else if(num <= 200){
                        red = 148 - (3*(num % 30)/16);
                        green = 255 - ((num % 30)/15);
                        blue = 26 + (213*(num % 30)/80);
                    }
                    else if(num > 150){
                        red = 133;
                        green = 239;
                        blue = 239;
                    }
                    else{
                      console.log("failed: " + length)
                    }

                    blue = Math.round(blue);
                    red = Math.round(red);
                    green = Math.round(green);
                    blue1 = Math.round(blue*.9);
                    red1 = Math.round(red*.9);
                    green1 = Math.round(green*.9);
                    if(length == 10)
                      idx++;
                    newRow.addAtr(idx-1, "style", "background: linear-gradient(to bottom right, rgb(" +red+","+green+","+blue+"), rgb(" +red1+","+green1+","+blue1+"))");
                  }
           }

          var n =0;
          while(Pokedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Pokedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              switch(i)
              {
                case 0: (!header)? newRow.addCell("<img src=\"images/smallsprites/"+ rowData[i] +".png\">" + "<a href=\"poke.php?meta="+ meta +"&mon=" + rowData[i] + "\"> &nbsp;" + rowData[i]+"</a>") : newRow.addCell(rowData[i]);
                case 1: break;
                case 3: if(rowData.length == 10){newRow.addCell("");  } newRow.addCell(rowData[i]); break;
                case 4: 
                case 5: 
                case 6:
                case 7:
                case 8: 
                case 9: statHeat(rowData.length, i); newRow.addCell(rowData[i]); break;
                default: newRow.addCell(rowData[i]);
              }
            }

            if(rowData.length == 10)
            {
              newRow.addAtr(1, "colspan", 2);
              newRow.addAtr(2, "style", "display:none");
            }
            else
            {
              newRow.addAtr(2, "class", newRow.cells[2]);
            }

            newRow.addAtr(0, "style", "text-align: left;");
            newRow.addAtr(1, "class", newRow.cells[1]);
            pokeTable.addRow(newRow);
            header = (false);
          }

          header = true;

          while(Movedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Movedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              if(i != 1)
              {
                newRow.addCell(rowData[i]);
              }
            }
            newRow.addAtr(0, "style", "text-align: left;");
            newRow.addAtr(1, "class", newRow.cells[1]);
            moveTable.addRow(newRow);
            header = (false);
          }

          
        </script>

        <script>
            $(document).ready(function(){
              // Write on keyup event of keyword input element
              $("#kwd_search").keyup(function(){
                // When value of the input is not blank
                    var term=$(this).val().toLowerCase();
                if( term != "") {
                  // Show only matching TR, hide rest of them
                        console.log( $(this).val())
                        $("table tbody>tr").hide();
                        var term=
                        $("td").filter(function(){
                              return $(this).text().toLowerCase().indexOf(term ) >-1
                        }).parent("tr").show();
                } else {
                  // When no input or clean again, show everything
                  $("tbody>tr").show();
                }
              });
            });

        </script>

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
        


        <div id="search">
          <h3 style ="margin-left:1%">Search: <input height="32" width="128" type="text" id="kwd_search" placeholder=""></h3>
        </div>

        <dix id="dex" class="dex">
          <script>
            document.getElementById("dex").innerHTML += pokeTable.print() + moveTable.print();
          </script>
        </div>
 
    </body>
</html>


