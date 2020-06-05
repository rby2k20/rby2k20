class article {

    title = "Failed to load. Please refresh.";
    author = "";
    day = "";
    month = "";
    year = "";
    tier = "";
    filename = ""
    content = ""
    sticky = false;

    constructor(url)
    {
        
        
        fetch("articles/" + url + ".html")
        .then(response => response.text())
        .then((data) => {
            try
            {
                this.filename = url;
                var doc = new DOMParser().parseFromString(data, "text/html");
                this.title = doc.getElementsByTagName("title")[0].innerHTML;
                this.author = doc.getElementsByTagName("author")[0].innerHTML;
                this.day = doc.getElementsByTagName("pubday")[0].innerHTML;
                this.month = doc.getElementsByTagName("pubmonth")[0].innerHTML;
                this.year = doc.getElementsByTagName("pubyear")[0].innerHTML;
                this.tier = doc.getElementsByTagName("tier")[0].innerHTML;
                this.sticky = doc.getElementsByTagName("sticky")[0].innerHTML == 'true';
                this.content = doc.getElementsByTagName("article")[0].innerHTML;
            }
            catch (Exception)
            {
                console.log(url+ " has invalid syntax");
                console.log(Exception);
            }         
        });


    }
}