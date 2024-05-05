<?php
//sedangkan ini adalah variable global
// $x =10;
//function memiliki circena sendiri yang di namakan variable lokal
// function tampil(){
//     global $x;
//     echo $x;
// }
// tampil();

//superglobal adalah variable yang sudah tersedia oleh php nya seperti
//$_GET,$_POST,$_REQUEST,$_SESSION,$_COOKIE,$_SERVER,$_ENV
//dan itu semua adalah array assosiatif seperti pada pertemuan ke 6

//$_GET

//dimethod $_GET juga bisa langsug menambah data di browserd dengan cara ? dan jika mwau menambah lagi data bisa menggunakan &
// var_dump($_GET);

$merek_laptop = [
    [
        "nama" => "Asus",
        "asal" => "Taiwan",
        "tahun" => "1989",
        "pendiri" => " T.H. Tung, Wayne Hsieh, M.T. Liao, Ted Hsu",
        "gambar" => "asus.png"
    ],
    [
        "nama" => "Apple.inc",
        "asal" => " Los Altos, California, Amerika",
        "tahun" => "1 April 1976",
        "pendiri" => " Steve Jobs, Steve Wozniak, Ronald Wayne",
        "gambar" => "Apple-Logo.png"
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
    <h1>merek</h1>

    <ul>
    <?php foreach($merek_laptop as $ml) :?>
        <li><a href="halaman2.php?nama=<?php echo$ml["nama"];?> &asal=<?php echo  $ml["asal"];?>&tahun=<?php echo$ml["tahun"]?>&pendiri=<?php echo $ml["pendiri"]?>">
        <?php echo $ml["nama"];?>
        </a>
    </li>
            <?php endforeach;?>
        </ul>
</body>
</html>