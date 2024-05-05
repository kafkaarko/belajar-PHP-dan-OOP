<?php
require'function.php';
if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pw = $_POST['password'];

   $result =  mysqli_query($k, "SELECT * FROM user WHERE username = '$user'");

   //cek usernmae
   if(mysqli_num_rows($result) === 1){

    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pw, $row["password"])){
        header("location: table.php");
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
            <li><button type="submit" name="login">login</button></li>
        </ul>
    </form>
</body>
</html>