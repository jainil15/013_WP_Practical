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
<span id="firstline">c. Create php page with name 1.php With fields username and password. 2 buttons ok and cancel. On click of ok button Retrieve the username & password and check if username= “admin” and password=”admin” go to admin.php. if username= “visitor” and password=”visitor” go to visitor.php.</span> <br>

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
<form action="2.php" method="post">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
    </form>
    
</body>
</html>
```
![Screenshot 2023-05-12 200207](/assets/Screenshot%202023-05-12%20200207.png)

![Screenshot 2023-05-12 200228](/assets/Screenshot%202023-05-12%20200228.png)

2.php:

```
<?php 
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin") {
            header("Location: ./admin.php");
            exit();
        }
        elseif($username == "visitor" && $password == "visitor") {
            header("Location: ./visitor.php");
            exit();
        }
        else{
            header("Location: ./1.php");
            exit();
        }
?>
```

admin.php:

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
    <h1>This is admin page</h1>
</body>
</html>
```

![Screenshot 2023-05-12 200214](/assets/Screenshot%202023-05-12%20200214.png)

visitor.php:

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
    <h1>This is visitor page</h1>
</body>
</html>
```

![Screenshot 2023-05-12 200233](/assets/Screenshot%202023-05-12%20200233.png)