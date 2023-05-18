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
<span id="firstline">c. Create a Form that accepts Personal information. Data should be saved in database on click of submit button. Added information should be displayed in tabular format on click of view details. Form should also contain button add, update, delete, for performing the operations Like adding information, editing the information and deleting information respectively.(Using Stored Procedure)</span>


index.php:

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
```


2.php:
```
<?php 
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $conn = new mysqli("localhost:4306", "root", "", "test");
    if(isset($_POST['add'])) {
        $stmt = $conn->prepare("CALL add_info(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$name, $password, $address, $phone, $email);
        $stmt->execute();
    }
    if(isset($_POST['update'])) {
        $stmt = $conn->prepare("CALL update_info(?, ?, ?, ?, ?)");
```
```     
        $stmt->bind_param("sssss",$name, $password, $address, $phone, $email);
        $stmt->execute();
    }
    if(isset($_POST['delete'])) {
        $stmt = $conn->prepare("CALL delete_info(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$name, $password, $address, $phone, $email);
        $stmt->execute();
    }
    $result = $conn->query("SELECT * FROM personal_info"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            margin: auto;
            border-collapse: collapse;
            width: 75%;
        }
    </style>
</head>
<body>
    <table border="1" >
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Address</th>
            <th>phone</th>
            <th>email</th>
        </tr>
        <?php 
            while($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $data['s_name']?></td>
            <td><?= $data['s_password']?></td>
            <td><?= $data['s_address']?></td>
            <td><?= $data['phone_no']?></td>
            <td><?= $data['email']?></td>
        </tr>
        <?php }?>
    </table>  
</body>
</html>
```

<br>

**Add**

![Screenshot 2023-05-17 183319](/assets/Screenshot%202023-05-17%20183319.png)

![Screenshot 2023-05-17 183447](/assets/Screenshot%202023-05-17%20183447.png)

**Delete**

![Screenshot 2023-05-17 183513](/assets/Screenshot%202023-05-17%20183513.png)

<br><br>

![Screenshot 2023-05-17 183521](/assets/Screenshot%202023-05-17%20183521.png)

**Update**

![Screenshot 2023-05-17 183554](/assets/Screenshot%202023-05-17%20183554.png)

![Screenshot 2023-05-17 183603](/assets/Screenshot%202023-05-17%20183603.png)