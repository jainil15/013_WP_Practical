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

<span id="firstline">d. Create an HTML page with java script, which takes numbers as inputs and display Odd numbers, Even Numbers on the web page.</span>

**Code:**

```<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    input{
        height: 2rem;
        width: 20rem;
    }
</style>
<body>
    <input type="text" name="numbers" id="numbers">
    <div id="even"></div>
    <div id="odd"></div>
    <script>
        let numbers = document.getElementById("numbers")
        let btn = document.getElementById("btn")
        let even_div = document.getElementById("even")
        let odd_div = document.getElementById("odd")
        numbers.oninput = () => {
            let n = numbers.value.split(",")
            let even = []
            let odd = []
            for (const item in n) {
                if(!isNaN(n[item]) && n[item] != "")
                if(parseInt(n[item])%2 === 0) {
                    even.push(n[item])
                }
                else{
                    odd.push(n[item])
                }
            }
            even_div.innerHTML="Even nos. = " + even
            odd_div.innerHTML = "Odd nos. = " + odd 
        }
    </script>
</body>
</html>
```
<br><br>

![Screenshot 2023-05-10 191440](/assets/Screenshot%202023-05-10%20191440.png)