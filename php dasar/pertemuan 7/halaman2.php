<?php

if( !isset($_GET["nama"])||
!isset($_GET["asal"])||
!isset($_GET["tahun"])||
!isset($_GET["pendiri"])
){
    //redirect
    header("Location: pertemuan7.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $_GET["nama"]?></h1>
    <ul>
        <li><?= $_GET["nama"]?></li>
        <li><?= $_GET["asal"]?></li>
        <li><?= $_GET["tahun"]?></li>
        <li><?= $_GET["pendiri"]?></li>
    </ul>

    <a href="pertemuan7.php">kembali</a>
</body>
</html>