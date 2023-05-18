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
    #screenshot {
  display: grid;
  grid-template-columns: auto auto auto
}
    #screenshot p img {
        max-width: 90%;
        height: 100%;
        object-fit: cover;
        
    }

    
</style>
<span id="firstline">f. Write a script having 3 buttons representing colour names as their caption. Background colour of the webpage should change according to the caption of the button when button is clicked.</span><br><br>

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
    <button id="green">GREEN</button><br>
    <button id="blue">BLUE</button><br>
    <button id="red">RED</button><br>
    <script>
        let green = document.getElementById("green")
        let red= document.getElementById("red")
        let blue = document.getElementById("blue")

        green.onclick = () => {
            document.body.style.backgroundColor = "green"
        }
        red.onclick = () => {
            document.body.style.backgroundColor = "red"
        }
        blue.onclick = () => {
            document.body.style.backgroundColor = "blue"
        }
    </script>
</body>
</html>
```

<div id="screenshot">

![Screenshot 2023-05-17 173348](/assets/Screenshot%202023-05-17%20173348.png)

![Screenshot 2023-05-17 173355](/assets/Screenshot%202023-05-17%20173355.png)

![Screenshot 2023-05-17 173404](/assets/Screenshot%202023-05-17%20173404.png)

</div>