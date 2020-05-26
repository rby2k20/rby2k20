var navEvent = new Event('nav');

nav = (id) =>
{
    fetch('includes/' + "nav.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
    
    setTimeout(function(){
        console.log(document.getElementById("navcontainer").offsetHeight);
        window.dispatchEvent(navEvent);
    }, 250);
    
    console.log("event called");
}

footer = (id) =>
{
    fetch('includes/' + "footer.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
}