<?php 
        session_start();
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["surname"] = $_POST["surname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["city"] = $_POST["city"];
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
    
    <a href="details.php?name=<?php echo $_SESSION["name"]; ?>"><?php echo $_SESSION["name"]; ?></a>
</body>
</html>