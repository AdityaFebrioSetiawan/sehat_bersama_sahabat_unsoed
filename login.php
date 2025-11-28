<?php
    include "service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 
        username= '$username' AND password= '$password'
        ";
        $result= $db->query($sql);
        
        if($result -> num_rows > 0) {
            $data= $result->fetch_assoc();
            header("Location: dashboard.php");
            
        }else{
            echo "akun tidak ditemukan";
        }
        
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #f5f7fa;
    }

    /* ====== HEADER & NAV STYLE (sama seperti sebelumnya) ====== */
    nav a, 
    .nav a,
    header a, 
    .header a {
        text-decoration: none;
        padding: 10px 15px;
        margin: 0 5px;
        color: white;
        background: #1e90ff;
        border-radius: 6px;
        display: inline-block;
        transition: 0.2s;
    }

    nav a:hover,
    .nav a:hover,
    header a:hover,
    .header a:hover {
        background: #0b74d1;
    }

    header, .header {
        background: #2c3e50;
        color: white;
        padding: 15px 20px;
        text-align: center;
        font-size: 1.2rem;
    }

    /* ====== FORM LOGIN ====== */
    h3 {
        text-align: center;
        margin-top: 40px;
        font-size: 1.5rem;
        color: #333;
    }

    form {
        background: white;
        width: 350px;
        margin: 0 auto;
        margin-top: 20px;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    form input {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1rem;
    }

    form input:focus {
        border-color: #1e90ff;
        outline: none;
        box-shadow: 0 0 4px rgba(30,144,255,0.5);
    }

    form button {
        padding: 12px;
        font-size: 1rem;
        background: #1e90ff;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s;
    }

    form button:hover {
        background: #0b74d1;
    }
</style>

<body>
    <?php include "Layout/header.html" ?>
    
    <h3> MASUK AKUN</h3>
    <form action="login.php" method="POST"> 
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="placeholder" name="password"/>
        <button type="submit" name="login">masuk sekarang</button>
    </form>
</body>
</html>