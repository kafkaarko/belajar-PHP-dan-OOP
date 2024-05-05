<?php
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
    <h1>daftar perusahaan</h1>
    <?php foreach ($merek_laptop as $ml) :?>
    <ul>
        <li>
            <img src="img_tugas/<?php $ml["gambar"]?>">
        </li>
        <li>nama : <?php echo$ml["nama"]?></li>
        <li>asal : <?php echo$ml["asal"]?></li>
        <li>pendiri : <?php echo$ml["pendiri"]?></li>
        <li>tahun : <?php echo$ml["tahun"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>