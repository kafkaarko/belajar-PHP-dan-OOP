<?php

//menciptakan hierarki antar kelas (parent & child)
// child class mewarisi semua properti dan method dari parent yang visble
// child class memperluas extends funsinalitas dari parentnya

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
        return  $this -> penulis .$this ->penerbit. $this -> harga;
    }

    public function getInfoProduk(){
        // buku : sisiterang | unknown,BIEL1998,200000 - 500 hlm
        $st = " {$this -> judul} | {$this -> getLabel()}";
      

        return $st;
    }

}

class komik extends produk{
    public $jumlahHalaman;

    public function __construct($judul , $penulis , $penerbit , $harga, $jumlahHalaman = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this -> jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        $st = "komik : " . parent::getInfoProduk(). " {$this -> jumlahHalaman} Halaman";
        return $st;
    }
    
}
class game extends produk{
    public $waktuMain;

    public function __construct($judul , $penulis , $penerbit , $harga, $jam = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this -> waktuMain = $jam;
    }

    public function getInfoProduk(){
        $st = "game :" . parent::getInfoProduk(). " {$this -> waktuMain} jam";
        return $st;
    }

}

class cetakInfo{
    public function cetak(produk $produk){
        $str = "{$produk -> judul}| {$produk -> getLabel()} ";
        return $str;
    }
}


$produk5 = new game("Devil My cry " , " idk " , " riot " , 2020 ,90);
$produk6 = new komik("sisi terang "," unknown "," BIEL1998 ",2000000,420);

echo $produk5 -> getInfoProduk();
echo "<br>";
echo $produk6 -> getInfoProduk();

//yang di inginkan yang di gabungkan semua info yang telah di tulis oleh user
// game : valorant | idk,riot,2020 - 50Jam
// buku : sisiterang | unknown,BIEL1998,200000 - 50Jam