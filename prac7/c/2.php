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
            font-size: 1.5rem;
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