class guide {

    title = "Failed to load. Please refresh.";
    author = "";
    day = "";
    month = "";
    year = "";
    category = "";
    filename = ""
    content = ""
    sticky = false;

    constructor(data, url)
    {
        try
        {
            this.filename = url;
            var doc = new DOMParser().parseFromString(data, "text/html");
            this.title = doc.getElementsByTagName("title")[0].innerHTML;
            this.author = doc.getElementsByTagName("author")[0].innerHTML;
            this.day = doc.getElementsByTagName("pubday")[0].innerHTML;
            this.month = doc.getElementsByTagName("pubmonth")[0].innerHTML;
            this.year = doc.getElementsByTagName("pubyear")[0].innerHTML;
            this.category = doc.getElementsByTagName("category")[0].innerHTML;
            this.sticky = doc.getElementsByTagName("sticky")[0].innerHTML == 'true';
            this.content = doc.getElementsByTagName("article")[0].innerHTML; 
        }
        catch (Exception)
        {
            console.log(url+ " has invalid syntax");
            console.log(Exception);
            document.getElementById("main").innerHTML = Exception;
        }   
    }
}


function getArticle(url)
{
    jQuery.get( url+".html", function( data ) 
    {
        content = new guide(data, url);
    });
}

function pushArticle(url)
{
    jQuery.get( url+".html", function( data ) 
    {
        unsortedArticles.push(new guide(data, url));
    });
}

//function getArticle(url)
//{
//    var oReq = new XMLHttpRequest();
//    oReq.addEventListener("load", response);
//    oReq.myURL = url;
//    oReq.open("GET", url+ ".html");
//    oReq.send();
//}

//function response(evt)
//{
//    content = new guide(this.responseText, evt.currentTarget.myURL)
//}