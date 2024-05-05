<?php
session_start();
require 'func.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    
    $result = mysqli_query($conn,"SELECT nama FROM akun WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256' , $row['nama'])){
        $_SESSION['login'] = true;
    }
}
if(isset($_SESSION['login'])){
    header("location: index.php");
    exit();
}
if(isset($_POST['login'])){
    $akun = $_POST['username'];
    $pw = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM akun WHERE nama = '$akun'");

    if(mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pw,$row['password'])){
            $_SESSION['login'] = true;
            if(isset($_POST['remember'])){
                setcookie('id',$row['id'].time()+120);
                setcookie('key', hash('sha256',$row['nama']), time()+120);
            }
            header("location:index.php");
            exit();
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
    <?php if(isset($error)):?>
        <p style="color:red; font-style: italic">username / pw salah</p>
        <?php endif;?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">USERNAME :</label>
                <input type="text" name="username" id="name">
            </li>
            <li>
                <label for="pw">PASSWORD :</label>
                <input type="password" name="password" id="pw">
            </li>
            <li>
                <input type="checkbox" name="remember">
                <label for="rm">ingat aku</label>
            </li>
            <li><button type="submit" name="login">login</button></li>
        </ul>
    </form>
</body>
</html>