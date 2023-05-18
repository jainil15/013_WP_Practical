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
<span id="firstline">d. Create and php page with name cookie.php With fields Name,surname,email-id,phone_no and city. 2 buttons ok and cancel. On click of ok button page should go to 1.php where it should contain link with name show details and on click of it other page should be open which shows you the details which you have filled in cookie.php page.(make use of cookies)</span> <br>

cookie.php:

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
![Screenshot 2023-05-12 200805](/assets/Screenshot%202023-05-12%20200805.png)

1.php: 

```
<?php 
        $name = $_POST['name'];
        $surname = $_POST['surname'];
```
```
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $value = "name = $name <br> surname = $surname <br> email = $email <br> phone = $phone <br> city = $city";
        
        setcookie($name, $value, time() + (86400*20) , "/")
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <a href="details.php?name=<?php echo $name; ?>"><?php echo $name; ?></a>
</body>
</html>

```

![Screenshot 2023-05-12 200811](/assets/Screenshot%202023-05-12%20200811.png)

details.php:

```
<?php 
    $name = $_GET["name"];
    echo $_COOKIE[$name]; 
?>
```
![Screenshot 2023-05-12 200815](/assets/Screenshot%202023-05-12%20200815.png)
