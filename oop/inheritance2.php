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
           $harga,
           $jmlHlm,
           $wktbrm;


    
    public function __construct($judul , $penulis , $penerbit , $harga,$jumlah = 0 , $jam = 0)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> jmlHlm = $jumlah;
        $this -> wktbrm = $jam;
        
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
    public function getInfoProduk(){
        $st = "komik : {$this -> judul} | {$this -> getLabel()} {$this -> jmlHlm} Halaman";
        return $st;
    }
    
}
class game extends produk{
    public function getInfoProduk(){
        $st = "game : {$this -> judul} | {$this -> getLabel()} {$this -> jmlHlm} jam";
        return $st;
    }

}

class cetakInfo{
    public function cetak(produk $produk){
        $str = "{$produk -> judul}| {$produk -> getLabel()}";
        return $str;
    }
}


$produk5 = new game("Devil My cry " , " idk " , " riot " , 2020 ,0,20);
$produk6 = new komik("sisi terang "," unknown "," BIEL1998 ",2000000,120,0);

echo $produk5 -> getInfoProduk();
echo "<br>";
echo $produk6 -> getInfoProduk();

//yang di inginkan yang di gabungkan semua info yang telah di tulis oleh user
// game : valorant | idk,riot,2020 - 50Jam
// buku : sisiterang | unknown,BIEL1998,200000 - 50Jam