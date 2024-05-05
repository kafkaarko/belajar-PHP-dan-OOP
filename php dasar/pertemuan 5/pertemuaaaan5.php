<?php
$siswa = [
    ["kafka" , "12309693" , "pplg" , "kafkaarko@gmail.com"], ["arko" , "12309683" , "pplg" , "arko@gmail.com"], ["ardissya" , "12309993" , "pplg" , "ardissya@gmail.com"]

];
//kalo bikin kyak gini  jangan keliru

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar siswa</h1>

    <?php foreach( $siswa as $k) :?>
    <ul>
        <li>nama : <?php echo $k[0]?></li>
        <li>nis : <?php echo $k[1]?></li>
        <li>Jurusan : <?php echo $k[2]?></li>
        <li>email  : <?php echo $k[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>
