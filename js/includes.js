nav = (id) =>
{
    fetch('includes/' + "nav.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
}

footer = (id) =>
{
    fetch('includes/' + "footer.html")
    .then(response => response.text())
    .then((data) => {
        document.getElementById(id).innerHTML = data;
    });
}