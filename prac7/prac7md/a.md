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
<h2 id ="header_" align="center">Practical 7</h2>
<span id="firstline">a. Create a database name student_info in my sql using php coding. Create table name personal_info with the fields Name,Password,Address,Phone no.,Email address. Add information of 5 students in the database.(All things should be done through php coding.)</span>
<br>
<br>
a.php:

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
```

![Screenshot 2023-05-12 202436](/assets/Screenshot%202023-05-12%20202436.png)