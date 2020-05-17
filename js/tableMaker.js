class table 
{ 
    constructor(className)
    {
        this.className = className;
        this.rows = [];
    }
    
    addRow = (row) => 
    {
        this.rows.push(row);
    }

    print = () =>
    {
        let s = "<table class=\"" + this.className + " sortable \">"
        for(var i = 0; i < this.rows.length; i++)
        {
            s += this.rows[i].print();
        }
        return s + "</table>";
    }
}

class idPair
{
    constructor(id, val)
    {
        this.id = id;
        this.val = val;
    }
}

class row 
{
    constructor()
    {
        this.header = false;
        this.cells = [];
        this.ats = [];
    }

    setHeader = (val) =>
    {
        this.header = val;
    }  
    
    addCell = (cell) =>
    {
        this.cells.push(cell);
    }

    addAtr = (i, name, value) =>
    {
        this.ats.push(new idPair(i, name+"=\""+value+"\""));
    }

    print = () =>
    {
        let s = "<tr>";
        let tagOpen = (this.header) ? "<th>" : "<td>";
        let tagClose = (this.header) ? "</th>" : "</td>";
        for(var i = 0; i < this.cells.length; i++)
        {
            for(var j = 0; j < this.ats.length; j++)
            {
                if(this.ats[j].id == i)
                {
                    console.log(this.ats[j].val);
                    tagOpen = tagOpen.replace(">", " " + this.ats[j].val + ">")
                }
            }
            s += tagOpen + this.cells[i] + tagClose;
            tagOpen = (this.header) ? "<th>" : "<td>";
        }
        return s + "</tr>";
    }
}

class tableScanner
{
    constructor(data, token)
    {
        this.token = token;
        this.data = data;
    }

    next = () =>
    {
        var next = this.data.substring(0,this.data.indexOf(this.token+this.token));
        this.data = this.data.substring(this.data.indexOf(this.token+this.token)+2);
        return next.split(this.token);
    }

    hasNext = () =>
    {
        return this.data.length > 0;
    }
}

addSpan = (html, className) =>
{
    return "<span class=\"" + className + "\">" + html + "</span>";
}

