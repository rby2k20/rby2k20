<!DOCTYPE html>
<html>
    <head>
    <title>
            RBY2K20: <?php echo $_GET['mon'] ?>
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/typecolors.css">
        <script src="js/tableMaker.js"></script>
        <script src="js/sorttable.js"></script>
        <script src="js/includes.js"></script>
        <style>
            body {
                font-family: Arial;
                background-color: #1464dc;
            }

            /* Style the tab */
            .tab 
            {
                overflow: hidden;
                background-color: crimson;
                text-align: center;
            }

            /* Style the buttons inside the tab */
            .tab button 
            {
                background-color: inherit;
                float: center;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
                color: yellow;
                font-weight: bold;
            }

            /* Change background color of buttons on hover */
            .tab button:hover 
            {
                background-color: darkred;

            }

            /* Create an active/current tablink class */
            .tab button.active 
            {
                background-color: #1464dc;
                color: white;
            }

            /* Style the tab content */
            .tabcontent 
            {
                display: none;
                padding: 6px 12px;
                border-top: none;
                background-color: #1464dc;
                color:white;
                padding-top: 32px;
            }

            table 
            {
                display: inline-block;
            }

            td:first-child, .stats td:nth-child(2)
            {
                text-align: right;
            }

            td 
            {
                text-align: left;
                font-weight: bold;
                font-size: 18px;
            }
            
            .sprite 
            {
                border-style: solid;
                border-color: black;
                border-radius: 8px;
                border-width: 4px;
                min-width: 198px;
                height: 198px;
                margin: 16px;
                background-color: #ddd;
                image-rendering: crisp-edges;
            }

            .pokepanel
            {
                display: flex;
                align-items: center;
            }
            
            #content {
                text-align: center;
                background-color: #1464dc;
            }

            h2 {
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <div id="navcontainer">
            <script>nav("navcontainer");</script>
        </div>


        <div id="content">
            <div class="tab">
                <button class="tablinks" id="rbytab" onclick="openTab(event, 'rby')">RBY OU</button>
                <button class="tablinks" id="rby1utab" onclick="openTab(event, 'rby1u')">RBY Tradebacks (1U)</button>
                <button class="tablinks" id="violettab" onclick="openTab(event, 'violet')">Violet</button>
            </div>
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
                    <div class="analysis">
                    
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
                    <div class="analysis">
                    
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
                    <div class="analysis">
                    
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
                try { evt.currentTarget.className += " active"; }
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
                return "&nbsp;&nbsp;&nbsp; <span style=\"display: inline-block; border-style: solid; border-width: 1px; border-color: black; height: 16px; background-color: " 
                    + barcolor(val) + " width: " + (val*2) + "px;\"></span>";
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



            window.addEventListener('load', function () 
            {
                openTab(this, meta);

                fetch('Analyses/rbyou/' + mon + ".html")
                    .then(response => response.text())
                    .then((data) => {
                        document.getElementsByClassName("analysis")[0].innerHTML = data;
                    });

                fetch('Analyses/rby1u/' + mon + ".html")
                    .then(response => response.text())
                    .then((data) => {
                        document.getElementsByClassName("analysis")[1].innerHTML = data;
                    });

                fetch('Analyses/violet/' + mon + ".html")
                    .then(response => response.text())
                    .then((data) => {
                        document.getElementsByClassName("analysis")[2].innerHTML = data;
                    });
                
            });

            

        </script>

    </body>
</html>
