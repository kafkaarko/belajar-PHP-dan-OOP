<?php

//jualan produk
// komik
// game

class produk{
    public $judul = "nabila",
           $penulis = "nabila",
           $penerbit = "kafka",
           $harga;

    public function getLabel(){
        return $this -> penulis  . $this -> judul;
    }
}

// $produk1 = new produk();
// $produk1 -> judul = "nabilaaaaaaa";
// var_dump($produk1);

// echo"<br>";

// $produk2 = new produk();
// $produk2 -> tambahan = "nabilaaaaaaaaaaaa";
// var_dump($produk2);

$produk3 = new produk();
$produk3 -> judul = "kafka the expoler";
$produk3 -> penulis = "kafka the saitis";
$produk3 -> penerbit = "kafka the labb";
$produk3 -> harga = 100000;

echo "buku : " . $produk3 -> judul,$produk3 -> penulis;
echo"<br>";
echo $produk3 -> getLabel();
echo "<br>";

$produk4 = new produk();

$produk4 -> judul = "nabila yudhila";
$produk4 -> penulis = "akuu ";
$produk4 -> penerbit = "kamuu";
$produk4 -> harga = "ywudhh";

 echo $produk4 -> getLabel();
echo"<br>";
echo"another :" . $produk4 ->getLabel();