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
<h2 id ="header_" align="center">Practical 5</h2>
<span id="firstline">a. Create a page using java script, which sorts elements of array in ascending array using bubble sort.</span>
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
    
    <script>
        
        let x = [5,4,2,4,5,3,9,0]
        document.write("before sorting: ",x)
        for (let i = 0; i < x.length-1; i++ ) {
            let swap = false
            for (let j = 0; j < x.length-i-1; j++ )
            {
                if (x[j] > x[j+1]) {
                    let temp = x[j+1]
                    x[j+1] = x[j]
                    x[j] = temp
                    swap = true
                }
                else{
                    
                }
            }
            if(!swap) {
                
                break
            }

        }
        document.write("<br>after sorting: ",x)
        
    </script>
</body>
</html>
```
![Screenshot 2023-05-10 185046](/assets/Screenshot%202023-05-10%20185046.png)


