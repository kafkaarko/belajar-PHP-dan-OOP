<?php
// array
// var yang dapat memiliki banyak nilai
//membuat array yang lama
//pasangan antara key dan value
//keynya adalah index,yang dimulai dari 0
$hari = array("senin" , "selasa", "rabu");
//cara baru
$bulan = ["januari", "febuari" , "maret"];
//ini boleh
$arr = [12 , "tulisan" , true];

//menampilakan array
//pake var_dumb / print_r()

// print_r($hari [2]);
// echo "<br>";
// var_dump($bulan [2]);

//cara menamppilkan array
// echo "<br>";
// echo $hari [0]

//menambah elemen pada array yang kita buat
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
$hari[] = "sabtu";
$hari[] = "minggu";
echo "<br>";
var_dump($hari);
?>