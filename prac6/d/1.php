<?php 
        $name = $_POST['name'];
        $surname = $_POST['surname'];
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