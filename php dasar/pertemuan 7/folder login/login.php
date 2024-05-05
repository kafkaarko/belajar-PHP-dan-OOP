<?php
//cek apakah tombil submit sudah di tekan atay blomm
if(isset ($_POST["submit"])){


    // cek username & pw
    if($_POST["username"] == "admin" && $_POST["pw"] == "nabila"){

   
    // jika benar,redict ke halaman admin
    header("Location : admin.php");
    exit;
}else{



    //jika salah tampil pesan kesalahan
    $eror = true;
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
        li{
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>halo user bjiw</h1>
    <?php if(isset($eror)):?>
    <p style="color: red; font-style:italic; ">username / password salah bro</p>
    <?php endif ; ?>
<ul>
    <form action="admin.php" method="post">

    <li>
        <label for="UN">username</label>
        <input type="text" name="username" id="UN">
    </li>
    <br>
    <li>
        <label for="PW">password</label>
        <input type="password" name="pw" id="PW">
    </li>
    <li>
        <button type="submit" name="submit">log in</button>
    </li>
    </form>
    </ul>
</body>
</html>