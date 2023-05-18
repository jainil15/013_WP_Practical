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

<span id="firstline">b. Create an HTML page with JavaScript , which contains a text box and button, When you click on button it displays content of text box in alert box.</span>
<br><br>

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
    <input type="text" name="sometext" id="sometext"></input>
    <br><br>
    <button id="btn">click me</button>
    <script>
        
        let btn = document.getElementById("btn")
        btn.onclick = () => {
            let text1 = document.getElementById("sometext").value
            alert(text1)
        }
    </script>
</body>
</html>
```

![Screenshot 2023-05-10 191141](/assets/Screenshot%202023-05-10%20191141.png)