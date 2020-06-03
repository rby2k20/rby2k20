//Makes bootstrap div with 
mkBtstpDiv = (cntnt, cls) =>
{
    return "<div class=\"" + cls + "\">" + cntnt + "</div>";
}

frmtDate = (day, month, year) =>
{   
    var Months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    var suffix = "th";
    if(day % 10 == 1 && day != 11) suffix = "st";
    if(day % 10 == 2 && day != 12) suffix = "nd";
    if(day % 10 == 3 && day != 13) suffix = "rd";
    return day + suffix + " " + Months[month-1] + " " + year;
}

function compareDates(a, b)
{
    if(a.year < b.year)
        return 1;
    else if(a.year > b.year)
        return -1;
    else if(a.month < b.month)
        return 1;
    else if(a.month > b.month)
        return -1;
    else if(a.day < b.day)
        return 1;
    else if(a.day > b.day)
        return -1;
    else return 0;
}