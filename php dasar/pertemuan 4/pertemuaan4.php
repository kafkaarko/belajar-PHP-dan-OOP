<?php
function salam($waktu, $nama ){
    return"selamat datang $nama , $waktu  ";
}

$waktu =  date("l , D-M-Y");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?php  echo salam($waktu,"kafka");?></h1>
</body>
</html>