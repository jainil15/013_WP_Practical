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
    $conn = new mysqli("localhost:4306", "root", "", "test");
    $sql = "CREATE TABLE personal_info(
        s_name varchar(30) primary key,
        s_password  varchar(30),
        s_address varchar(50),
        phone_no int(12),
        email varchar(40)
    ) ";

    $conn->query($sql);

    $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('josh', '1234', 'india', '12343234', 'asb@gm.com')");
    $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('mosh', '1444', 'india', '67732345', 'mosh@gm.com')");
    $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('rava', 'somerandom', 'armenia', '92592525', 'rava@gm.com')");
    $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('martin', 'theone', 'pakistan', '84451515', 'martin@gm.com')");
    $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('fish', 'fishing', 'antartic', '933939399', 'fish@gm.com')");
    
    ?>
</body>
</html>