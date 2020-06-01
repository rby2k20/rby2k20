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
        <div id="navcontainer">
            <script>nav("navcontainer");</script>
        </div>

        <div id="articles">
            
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
                        this.output += mkBtstpDiv(articles[i].title, "");
                        output += mkBtstpDiv(articles[i].author, "");
                        output += mkBtstpDiv(articles[i].day + " " + articles[i].month + " " + articles[i].year,"");
                        output += mkBtstpDiv(articles[i].tier, "");
                    }

                    console.log(output);
                    document.getElementById("articles").innerHTML = output;
                }, 350);

                
        </script>
    </body>
</html>