function scroll()
{
    console.log("scrolled");
    setTimeout(function(){window.scrollBy(0,-1 * document.getElementById("nav").offsetHeight)},10);
}


function letsread()
{
    
    //Back to top
    try
    {
        var elements = document.getElementsByClassName("returntop");
        for(var i =0; i < elements.length;i++)
        {
            elements[i].innerHTML = "<a href=\"#top\">Return to top</a>";
        }
        document.getElementById("main").innerHTML = 
            "<div id=\"top;\"></div>" + document.getElementById("main").innerHTML 
    }
    catch (Exception) {Exception;}

    try
    {
        var toc = "<h3>Table of Contents</h3>";
        var heads = $("h1, h2");
        var h1 = 0, h2 =0;
        for(var i = 1; i < heads.length; i++)
        {
            if(heads[i].outerHTML.includes("h1"))
            {
                h2 = 0;
                toc += "<h4><a onclick=\"scroll();\" href=\"#"+heads[i].id+"\">"+ ++h1 + ". " + heads[i].innerHTML+"</a></h4>";
            }
            else
            {
                toc += "<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onclick=\"scroll();\" href=\"#"+heads[i].id+"\">"+ h1 + "."+ ++h2 + ". " + heads[i].innerHTML+"</a></h4>";
            }
            //toc += "<br>"
        }
        document.getElementById("toc").innerHTML = toc;
        heads = $("h3, h4");
        console.log(heads.length);
        for(var i = 1; i < heads.length; i++)
        {
            heads[i].addEventListener("click", function(){scroll()});
        }
    }
    catch (Exception) {Exception;}

    try
    {
        document.getElementById("author").innerHTML = content.author;
    }
    catch (Exception) {Exception;}

    try
    {
        console.log(content);
        console.log(content.Pokemon);
        var imagediv = document.getElementById("teamsprites");
        for(var i =0; i < 6; i++)
        {
            imagediv.innerHTML += "<img src=\"images/sprites/"+ content.Pokemon[i] +".png\">";
        }
    }
    catch (Exception) {console.log(Exception);}

}


