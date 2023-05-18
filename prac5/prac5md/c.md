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
  grid-template-columns: auto auto
}
    #screenshot p img {
        max-width: 40%;
    }

    
</style>

<span id="firstline">c. Create an HTML page using JavaScript, which gives simple functionality of a calculator. (Addition,multiplication, division and subtraction)</span>
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
    <style>
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #main{
            
            margin: auto;
            margin-top: 9vh;
            width: 16rem;
            display: flex;
            flex-direction: column;
        }
        #main_display{
            font-size: 1.7rem;
            border: 1px solid gray;
            display: flex;
            flex-direction: column;
            
            padding: 5px;
            background: rgb(235, 225, 225, 0.5);
            overflow: hidden;
            height: 4rem;
            margin: 0;
        }
        #upper_display{
            height: 2rem;
            font-size: 1.2rem;
            text-align: right;
        }
        #display{
            height: 3rem;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
        }
```
```
        button{
            height: 4rem;
            border-radius: 0;
            border-style: none;
            margin: 0;
            border: 1px solid gray;

        }
        #container{
            display:grid;
            grid-template-columns: 4rem 4rem 4rem 4rem;
        }
        
    </style>
</head>
<body>
    <div id="main">
    <div id="main_display">
        <div id="upper_display"></div>
        <div id="display"></div>
    </div>
    <br>
    <div id="container">
        <button class="digit">1</button>
        <button class="digit">2</button>
        <button class="digit">3</button>
        <button id="add" class="oper">+</button>
        <button class="digit">4</button>
        <button class="digit">5</button>
        <button class="digit">6</button>
        <button id="sub" class="oper">-</button>
        <button class="digit">7</button>
        <button class="digit">8</button>
        <button class="digit">9</button>
        <button id="mult" class="oper">*</button>
        
        <button class="digit">.</button>
        <button class="digit">0</button>
        <button id="equals">=</button>
    
    
    
    <button id="div" class="oper">/</button>
    
    <button id="reset">C</button>
    </div> 
</div> 
    

    <script>
        let display=document.getElementById("display")
        let op = document.getElementsByClassName("oper")
        let equals = document.getElementById("equals")
        let reset = document.getElementById("reset")
        let digits = document.getElementsByClassName("digit")
        let displayText = ""
        let first
        let udisp = document.getElementById("upper_display")
        let operation = ""
        display.innerHTML = "0"
        let isRes = true

        for (const item in op) {
            op[item].onclick = (e) => {
                operation = op[item].innerHTML
                if(displayText != "") {
                    first = parseFloat(displayText)
                }

                displayText = ""
                display.innerHTML = displayText
                udisp.innerHTML = first + " " + operation
            }
            
        }
        
        for (const item in digits) {
            digits[item].onclick = () => {
                if(isRes) {
                    displayText = ""
                    isRes = false
                }
                displayText += digits[item].innerHTML
                display.innerHTML = displayText
            }
        }

        equals.onclick = () => {
            displayText =doOperation(first, operation, parseFloat(displayText))
            display.innerHTML = displayText
            udisp.innerHTML = ""
            isRes = true
        }
        
        document.onkeypress = (e) => {12
            if (!isNaN(e.key) ) {
                if(isRes) {
                    displayText = ""
                    isRes = false
                }
                displayText += e.key
            }
            else if (specialChar(e.key)) {
                if(displayText != "") {
                    first = parseFloat(displayText)
                    
                }
                operation = e.key
                displayText = ""
                udisp.innerHTML = first+" "+operation
            }
            else if (e.key == "=" || e.keyCode == 13) {
                displayText =doOperation(first, operation, parseFloat(displayText))
                udisp.innerHTML = ""
                isRes = true

            }
            else if (e.key == ".") {
                displayText += e.key
            }
            display.innerHTML = displayText
        }

        reset.onclick = () => {
            operation = ""
            first = 0;
            displayText = ""
            udisp.innerHTML = ""
            display.innerHTML = displayText
            display.innerHTML="0"
            
        }


        

        function specialChar(e) {
            if(e == "+" || e == "*" || e == "-" || e == "/") {
                return true
            }
            
            return false
        }

        function doOperation(first, opcode, second) {
            switch(opcode) {
                case "+": return first+second
                case "-": return first - second
                case "*": return (first*second).toPrecision(9)
                case "/": return (second/first).toPrecision(9)
                default: return 
            }
        }

        

    </script>


</body>
</html>
```


Subtraction
<div id="screenshot">

![Screenshot 2023-05-17 162834](/assets/Screenshot%202023-05-17%20162834_h826s2nlt.png)

![Screenshot 2023-05-17 162842](/assets/Screenshot%202023-05-17%20162842_bovck0joe.png)

</div>

Addition

<div id="screenshot">

![Screenshot 2023-05-17 162858](/assets/Screenshot%202023-05-17%20162858_luahbdjph.png)

![Screenshot 2023-05-17 162906](/assets/Screenshot%202023-05-17%20162906_pqjeb4kwc.png)

</div>

Multiplication

<div id="screenshot">

![Screenshot 2023-05-17 162920](/assets/Screenshot%202023-05-17%20162920_w8gzg9q57.png)

![Screenshot 2023-05-17 162927](/assets/Screenshot%202023-05-17%20162927_5lrz8h9t3.png)

</div>
<br><br><br><br>
Division

<div id="screenshot">

![Screenshot 2023-05-17 162951](/assets/Screenshot%202023-05-17%20162951_th5zyalip.png)

![Screenshot 2023-05-17 162959](/assets/Screenshot%202023-05-17%20162959_8rl8go076.png)

</div>