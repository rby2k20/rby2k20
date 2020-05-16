class table 
{  
    addRow = (row) => 
    {
        this.rows.push(row);
    }

    print = () =>
    {
        let s = "<table>"
        for(var i = 0; i < this.rows.length; i++)
        {
            s += this.rows[i].print();
        }
        return s + "</table>";
    }
}

class row 
{
    constructor()
    {
        header = false;
    }

    setHead = (val) =>
    {
        header = val;
    }  
    
    addCell = (cell) =>
    {
        this.cells.push(cell);
    }

    print = () =>
    {
        let s = "<tr>";
        let tagOpen = (this.heading) ? "<th>" : "<td>";
        let tagClose = (this.heading) ? "</th>" : "</td>";
        for(var i = 0; i < this.cells.length; i++)
        {
            s += tagOpen + this.cells[i] + tagClose;
        }
        return s + "</tr>";
    }
}