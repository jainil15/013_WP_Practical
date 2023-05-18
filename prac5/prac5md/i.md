<style>
    *{
        
        font-size:14px;
    }
    html body code{
        font: "Helvetica Neue",Helvetica,"Segoe UI",Arial,freesans,sans-serif;
        font-size: 14px !important;
        background: inherit !important
    }

    html body pre code, html body pre tt {
        font-family: jetbrains mono !important;
        font-size: 14px !important;
        background: inherit !important
    }

    body{
        color: #000 !important
    }

    li>code:first-child{
        font-size: 14px !important;
        font-weight: bolder;
    }
    
    html body code{
        font-size: 14px !important;
    }

    code{
        font-family:"Helvetica Neue",Helvetica,"Segoe UI",Arial,freesans,sans-serif !important;
    }

    #firstline{
        font-size: 16px !important;
        font-weight: bolder;
        color: #000;
    }

    
</style>
<span id="firstline">i. Write a script having 1 textbox, 1 button in 1.htm page. When button is clicked, it should open new window & display the contents entered in the textbox in the new window.</span><br><br>

**Code:**

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="name" id="name">
    <button id="btn">open</button>
    <script>
        let btn = document.getElementById("btn")
        btn.onclick = () => {
            let msg = document.getElementById("name").value
            let newWindow = open("", "" ,"width=300 height=300")
            newWindow.document.write(msg + "")
        }
    </script>
</body>
</html>
```
![Screenshot 2023-05-10 192227](/assets/Screenshot%202023-05-10%20192227.png)