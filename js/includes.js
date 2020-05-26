var navEvent = new Event('nav');

nav = (id) =>
{
    fetch('includes/' + "nav.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
    
    setTimeout(function(){
        window.dispatchEvent(navEvent);
    }, 250);

}

footer = (id) =>
{
    fetch('includes/' + "footer.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
}