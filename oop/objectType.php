<?php

//jualan produk
// game

class produk{
    public $judul,
           $penulis ,
           $penerbit,
           $harga;


    
    public function __construct($judul , $penulis , $penerbit , $harga)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
    }

    public function getLabel()
    {
        return  $this -> penulis . $this -> harga;
    }


}

class cetakInfo{
    public function cetak(produk $produk){
        $str = "{$produk -> judul}| {$produk -> getLabel()}";
        return $str;
    }
}

// $produk1 = new produk();
// $produk1 -> judul = "nabilaaaaaaa";
// var_dump($produk1);

// echo"<br>";

// $produk2 = new produk();
// $produk2 -> tambahan = "nabilaaaaaaaaaaaa";
// var_dump($produk2);


// $produk3 = new produk("mario" , " koji " , " nintendo " , 1998);


// echo "game : " . $produk3 -> judul;
// echo"<br>";
// echo $produk3 -> getLabel();
// echo "<br>";

$produk4 = new produk("god of war "," idk" ," sony ", 2018);

echo $produk4 -> getLabel();
echo"<br>";
echo"game :" . $produk4 ->getLabel();
echo"<br>";

$produk5 = new produk("valo " , " idk " , " riot " , 2020);
echo $produk5 -> getLabel();
echo"<br>";
echo"game :" . $produk5 ->getLabel();
echo"<br>";

$infoProduk4 = new cetakInfo();
echo $infoProduk4->cetak($produk4);

