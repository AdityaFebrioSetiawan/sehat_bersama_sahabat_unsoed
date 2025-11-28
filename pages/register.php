<?php
    include "service/database.php";

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$password')";

        if($db -> query($sql)) {
            echo "DATA MASUK";
        }else {
            echo "DATA GAGAL MASUK";
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #ced5ffff;
        margin: 0;
        padding: 0;
        color: #997272ff;
    }

    h3 {
        text-align: center;
        margin-top: 40px;
        color: #ffffff;
        font-weight: 700;
        letter-spacing: 1px;
    }

    form {
        width: 350px;
        margin: 30px auto;
        background: #ffffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 14px rgba(0,0,0,0.6);
        display: flex;
        flex-direction: column;
        gap: 15px;
        border: 1px solid #333;
    }

    input {
        padding: 12px;
        border: 1px solid #333;
        border-radius: 6px;
        font-size: 14px;
        transition: 0.2s;
        background: #ffffffff;
        color: #e0e0e0;
    }

    input:focus {
        border-color: #ffffffff;
        outline: none;
        box-shadow: 0 0 6px rgba(98, 0, 234, 0.7);
    }

    button {
        padding: 12px;
        border: none;
        background: #6200ea;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        transition: 0.2s;
    }

    button:hover {
        background: #3700b3;
    }
</style>

</head>
<body>
    <?php include "Layout/header.html" ?>

    <h3> DAFTAR AKUN</h3>
    <form action="register.php" method="POST"> 
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="placeholder" name="password"/>
        <button type="submit" name="register">daftar sekarang</button>
    </form>
</body>
</html>