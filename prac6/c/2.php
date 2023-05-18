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