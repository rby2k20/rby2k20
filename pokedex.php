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
                    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE){
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
              while (($data = fgetcsv($handle, 100000, ",")) !== FALSE){
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

          while(Pokedata.hasNext())
          {
            var newRow = new row();
            newRow.setHeader(header);
            var rowData = Pokedata.next();
            for (var i = 0; i < rowData.length; i++)
            {
              newRow.addCell(rowData[i]);
            }
            if(newRow.cells.length == 10)
            {
              newRow.addAtr(2, "colspan", 2)
            }
            newRow.addAtr(0, "style", "text-align: left;")
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
              newRow.addCell(rowData[i]);
            }
            moveTable.addRow(newRow);
            header = (false);
          }

          
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
                    <a class="nav-link" href="#">Home</a>
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
                        <a class="dropdown-item" href="#">RBY OU</a>
                        <a class="dropdown-item" href="#">RBY 1U</a>
                        <a class="dropdown-item" href="#">Violet</a>
                        <a class="dropdown-item" href="#">All Tiers</a>
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


        <dix id="dex">
          <script>
            document.getElementById("dex").innerHTML = pokeTable.print() + moveTable.print();
          </script>
        </div>
 
    </body>
</html>


