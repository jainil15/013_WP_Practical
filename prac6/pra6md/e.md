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
<span id="firstline">e. Same program as above but instead of using cookie use session to store information</span> <br>

session.php: 

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
    <form action="1.php" method="post">
        Name: <input type="text" name="name" id="name"><br><br>
        Surname: <input type="text" name="surname"><br><br>
        Email: <input type="email" name="email" id="email"><br><br>
        Phone: <input type="tel" name="phone" id="phone"><br><br>
        City: <input type="text" name="city" id="city"><br><br>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>
```
![Screenshot 2023-05-12 201449](/assets/Screenshot%202023-05-12%20201449.png)

1.php: 

```
<?php 
        session_start();
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["surname"] = $_POST["surname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["city"] = $_POST["city"];
?>
```
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
    
    <a href="details.php?name=<?php echo $_SESSION["name"]; ?>"><?php echo $_SESSION["name"]; ?></a>
</body>
</html>
```

![Screenshot 2023-05-12 201455](/assets/Screenshot%202023-05-12%20201455.png)

details.php

```
<?php 
    session_start();
    $name = $_GET["name"];
    print_r($_SESSION);
?>
```

![Screenshot 2023-05-12 201500](/assets/Screenshot%202023-05-12%20201500.png)