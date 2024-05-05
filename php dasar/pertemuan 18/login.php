<?php
session_start();
require'function.php';
//nabila 123

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result =mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if($key === hash('sha256',$row['username'])){
        $_SESSION['login'] = true;
}
}
if(isset($_SESSION['login'])){
    header("location: index.php");
    exit();
}
if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pw = $_POST['password'];

   $result =  mysqli_query($k, "SELECT * FROM user WHERE username = '$user'");

   //cek usernmae
   if(mysqli_num_rows($result) === 1){

    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pw, $row["password"])){
        //session
        $_SESSION['login'] = true;

        //cek rememberme
        if(isset($_POST['remember'])){
            //buat cookie
            
            setcookie('id',$row['id'],time()+60);
            setcookie('key' ,hash('sha256',$row['username']), time()+60);
        }

        header("location: index.php");
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
                <input type="checkbox" name="remember" id="pw">
                <label for="rm">ingat aku</label>
            </li>
            <li><button type="submit" name="login">login</button></li>
        </ul>
    </form>
</body>
</html>