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
                    var num = (idx == 9 || (length == 10 && idx == 8)) ? parseInt(rowData[idx]/3) : parseInt(rowData[idx]);
                    var red = 0;
                    var green = 0;
                    var blue = 0;

                    if(num <=60){
                        red = 230;
                        green = 100 * ((num)/60.0);
                    }
                    else if(num <=80){
                        num -= 15;
                        red = 230;
                        green = 100 + 155 * ((num)/30.0);
                    }
                    else if(num <= 100){
                        num -= 30;
                        red = 200 - (200 * ((30-num)/30.0));
                        green = 200;
                    }
                    else if(num <= 120){
                        num -= 40;
                        red = 0;
                        green = 150;
                        blue = 200 + ((num)/30.0);
                    }
                    else if(num > 120){
                        red = 100
                        green = 200;
                        blue = 250;
                    }
                    else{
                      console.log("failed: " + length)
                    }

                    blue = Math.round(blue);
                    red = Math.round(red);
                    green = Math.round(green);
                    blue1 = Math.round(blue*.75);
                    red1 = Math.round(red*.75);
                    green1 = Math.round(green*.75);
                    if(length == 10)
                      idx++;
                    newRow.addAtr(idx-1, "style", "background: linear-gradient(to bottom right, rgb(" +red+","+green+","+blue+"), rgb(" +red1+","+green1+","+blue1+"))");
                  }
           }


          while(Pokedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Pokedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              switch(i)
              {
                case 0: (!header)? newRow.addCell("<a href=\"poke.php?mon=" + rowData[i] + "\">" + rowData[i]+"</a>") : newRow.addCell(rowData[i]);
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
            <img src="images/logo2.png">
        </div>
        
          <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light">
            <a id="brand" class="navbar-brand" href="#">RBY2K20</a>
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
                        <a class="dropdown-item" href="guides.php?tag=rby">RBY OU</a>
                        <a class="dropdown-item" href="guides.php?tag=rby1u">RBY 1U</a>
                        <a class="dropdown-item" href="guides.php?tag=violet">Violet</a>
                        <a class="dropdown-item" href="guides.php">All Tiers</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Patricipate
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://discord.gg/GYFJmfm">Discord</a>
                    <a class="dropdown-item" href="https://rby2k20.freeforums.net/">Forum</a>
                    <a class="dropdown-item" href="#">Pokemon Showdown Sever</a>
                  </div>
                </li>
                
              </ul>
            </div>
          </nav>


        <!--NAVBAR-->

        <div id="search">
          <h3 style ="margin-left:1%">Search: <input height="32" width="128" type="text" id="kwd_search" placeholder=""></h3>
        </div>

        <dix id="dex">
          <script>
            document.getElementById("dex").innerHTML += pokeTable.print() + moveTable.print();
          </script>
        </div>
 
    </body>
</html>


