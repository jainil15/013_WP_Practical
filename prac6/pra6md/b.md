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
<span id="firstline">b. Create php page with name 1.php With fields username and password. 2 buttons ok and cancel. On click of ok button data filled in the fields should be displayed on the next page.(use post and get method)</span> <br>

**i. GET**

1.php: 
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
    <form action="2.php" method="get">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="reset" value="Cancel">
        <button type="submit">Ok</button>
    </form>
</body>
</html>

```
![Screenshot 2023-05-12 195443](/assets/Screenshot%202023-05-12%20195443.png)

2.php:

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
```
```  
    <?php
        $username = $_GET['username'];
        $password = $_GET['password'];     
        print("Username: ".$username);
        print("<br>Password: ".$password);
    ?>

</body>
</html>
```
![Screenshot 2023-05-12 195535](/assets/Screenshot%202023-05-12%20195535.png)

**POST:**

1.php
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
    <form action="2.php" method="post">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="reset" value="Cancel">
        <button type="submit">Ok</button>
    </form>
</body>
</html>
```
![Screenshot 2023-05-12 195653](/assets/Screenshot%202023-05-12%20195653.png)

2.php

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
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        print("Username: ".$username);
        print("<br>Password: ".$password);
    ?>

</body>
</html>
```
![Screenshot 2023-05-12 195710](/assets/Screenshot%202023-05-12%20195710.png)
