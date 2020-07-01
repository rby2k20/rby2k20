function team(data, url) {

    try
    {
        this.filename = url;
        this.Pokemon = []
        this.content = [];
        var doc = new DOMParser().parseFromString(data, "text/html");
        this.title = doc.getElementsByTagName("title")[0].innerHTML;
        this.author = doc.getElementsByTagName("author")[0].innerHTML;
        this.day = doc.getElementsByTagName("pubday")[0].innerHTML;
        this.month = doc.getElementsByTagName("pubmonth")[0].innerHTML;
        this.year = doc.getElementsByTagName("pubyear")[0].innerHTML;
        this.category = doc.getElementsByTagName("category")[0].innerHTML;
        this.sticky = doc.getElementsByTagName("sticky")[0].innerHTML == 'true';
        for(var i = 0; i <  doc.getElementsByTagName("article").length; i++)
        {
            this.content.push(doc.getElementsByTagName("article")[i]); 
        }  
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[0].innerHTML); 
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[1].innerHTML); 
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[2].innerHTML); 
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[3].innerHTML); 
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[4].innerHTML); 
        this.Pokemon.push(doc.getElementsByTagName("pokemon")[5].innerHTML);
    }
    catch (Exception)
    {
        console.log(url+ " has invalid syntax");
        console.log(Exception);
        document.getElementById("main").innerHTML = Exception;
    }   

}


function pushTeam(url)
{
    jQuery.get( url+".html", function( data ) 
    {
        unsortedArticles.push(new team(data, url));
    });
}