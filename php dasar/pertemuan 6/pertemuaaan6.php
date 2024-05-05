<?php
 $siswa = [
    [
        "nama" => "kafka",
        "jurusan" => "pplg",
        "minat" => "komputer",
        "rank" => "legend",
        "gambar" => "images (1).jpg"
    ],
    [
        "nama" => "arko",
        "jurusan" => "pplg",
        "minat" => "komputer",
        "rank" => "miitk",
        "gambar" => "images (2).jpg"
    ]

];
    
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
        <li>
            <img src="img/<?php $k["gambar"]; ?>">
        </li>
        <li>nama : <?php echo $k["nama"]?></li>
        <li>jurusan : <?php echo $k["jurusan"]?></li>
        <li>Minat : <?php echo $k["minat"]?></li>
        <li>rank  : <?php echo $k["rank"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>

