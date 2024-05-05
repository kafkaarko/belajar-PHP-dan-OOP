<?php
require'function.php';

if(isset($_POST['regis'])){

    if(regiss($_POST) > 0){
        echo"<script>
            alert('user baru berhasil di tambahkan');
        </script>";
    }else{
        echo mysqli_error($k);
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
        label{
            display: block;
        }
    </style>
</head>
<body>
    
    <h1>halaman registrasi</h1>
    <form action="" method="post">


        <ul>
            <li>
                <label for="user">USERNAME : </label>
                <input type="text" name="username" id="user">
            </li>
            <li>
                <label for="pw">PASSWORD : </label>
                <input type="password" name="password" id="pw">
            </li>
            <li>
                <label for="pw2">KONFIRM: </label>
                <input type="password" name="pasword2" id="pw2">
            </li>
            <br>
            <li>
                <button type="submit" name="regis"> registrasi</button>
            </li>
        </ul>

    </form>

</body>
</html>