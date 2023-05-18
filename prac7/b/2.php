<?php 
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $conn = new mysqli("localhost:4306", "root", "", "test");
    if(isset($_POST['add'])) {
        $conn->query("INSERT INTO personal_info (s_name, s_password, s_address, phone_no, email) values ('$name', '$password', '$address', $phone, '$email')");
    }

    if(isset($_POST['update'])) {
        $conn->query("UPDATE personal_info SET s_password='$password', s_address='$address', phone_no='$phone', email='$email' WHERE s_name='$name'");
    }

    if(isset($_POST['delete'])) {
        $conn->query("DELETE FROM personal_info WHERE s_name='$name'");
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