function table(className)
{ 
    this.className = className;
    this.rows = [];
}
    
table.prototype.addRow = function(row)
{
    this.rows.push(row);
}

table.prototype.print = function()
{
    let s = "<table class=\"" + this.className + " sortable \">"
    for(var i = 0; i < this.rows.length; i++)
    {
        s += this.rows[i].print();
    }
    return s + "</table>";
}

function idPair(id, val)
{
    this.id = id;
    this.val = val;
}

function row()
{
    this.header = false;
    this.cells = [];
    this.ats = [];
}

row.prototype.setHeader = function(val)
{
    this.header = val;
}  

row.prototype.addCell = function(cell)
{
    this.cells.push(cell);
}

row.prototype.addAtr = function(i, name, value)
{
    this.ats.push(new idPair(i, name+"=\""+value+"\""));
}

row.prototype.print = function()
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


function tableScanner(data, token)
{
    this.token = token;
    this.data = data;
    console.log(data.length);
}

tableScanner.prototype.next = function()
{
    var next = this.data.substring(0,this.data.indexOf(this.token+this.token));
    this.data = this.data.substring(this.data.indexOf(this.token+this.token)+2);
    return next.split(this.token);
}

tableScanner.prototype.hasNext = function()
{ 
    console.log(this.data)
    return this.data.length > 0;
}


addSpan = (html, className) =>
{
    return "<span class=\"" + className + "\">" + html + "</span>";
}


  
  statHeat = (length, idx) =>
  {
   if(length == 10)
     idx = idx-1;
   if(!header) 
   {
           var num = (idx == 9 || (length == 10 && idx == 8)) ? parseInt(rowData[idx]/5) : parseInt(rowData[idx]);
           var red = 0;
           var green = 0;
           var blue = 0;

           if(num <=30){
               red = 180;
               green = 28;
               blue = 11;
           }
           else if(num < 60){
               red = 180 + (16*(num % 30)/15);
               green = 28 + (104*(num % 30)/30);
               blue = 11 + ((num % 30)/10);
           }
           else if(num == 60){
               red = 222;
               green = 132;
               blue = 14;
           }
           else if(num < 90){
               red = 222 + (14*(num % 30)/15);
               green = 132 + (33*(num % 30)/10);
               console.log("green: " + green + "  Num: " + num);
               blue = 14 + ((num % 30)/5);
           }
           else if(num == 90){
               red = 250;
               green = 231;
               blue = 20;
           }
           else if(num < 120){
               red = 250 - (51*(num % 30)/15);
               green = 231 + (4*(num % 30)/5);
               blue = 20 + ((num % 30)/5);
           }
           else if(num == 120){
               red = 148;
               green = 255;
               blue = 26;
           }
           else if(num <= 200){
               red = 148 - (3*(num % 30)/16);
               green = 255 - ((num % 30)/15);
               blue = 26 + (213*(num % 30)/80);
           }
           else if(num > 150){
               red = 133;
               green = 239;
               blue = 239;
           }
           else{
             console.log("failed: " + length)
           }

           blue = Math.round(blue);
           red = Math.round(red);
           green = Math.round(green);
           blue1 = Math.round(blue*.9);
           red1 = Math.round(red*.9);
           green1 = Math.round(green*.9);
           if(length == 10)
             idx++;
           newRow.addAtr(idx-1, "style", "background: linear-gradient(to bottom right, rgb(" +red+","+green+","+blue+"), rgb(" +red1+","+green1+","+blue1+"))");
         }
  }