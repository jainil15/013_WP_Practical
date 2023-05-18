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
<span id="firstline">j. Write a script to hide the text when hide button is clicked and to show the text when show button is clicked.</span><br><br>

**Code:**

```<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="p">Hide and show this text</p>
    <button id="hide">hide</button>
    <button id="show">show</button>
    <script>
        let p1 = document.getElementById("p")
        let hide = document.getElementById("hide")
        let show = document.getElementById("show")

        show.onclick = () => {
            p1.style.display = "block"
        }

        hide.onclick = () => {
            p1.style.display = "none"
        }

        
    </script>
</body>
</html>
```

![Screenshot 2023-05-10 192258](/assets/Screenshot%202023-05-10%20192258.png)

![Screenshot 2023-05-10 192318](/assets/Screenshot%202023-05-10%20192318.png)