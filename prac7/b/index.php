<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="POST">
        Name: <input type="text" name="name" id="name"><br><br>
        Password: <input type="password" name="password" id="password"> <br><br>
        Address: <br>  <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        Phone No.: <input type="tel" name="phone" id="phone"> <br><br>
        Email Address: <input type="email" name="email" id="email"><br><br>


        <input type="submit" value="add" name="add">
        <input type="submit" value="update" name="update">
        <input type="submit" value="delete" name="delete">

    </form>
</body>
</html>