<?php

class komik extends produk implements infoProduk{
    public $jumlahHalaman;

    public function __construct($judul , $penulis , $penerbit , $harga, $jumlahHalaman = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this -> jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo(){
        // buku : sisiterang | unknown,BIEL1998,200000 - 500 hlm
        $st = " {$this -> judul} | {$this -> getLabel()}";
      

        return $st;
    }

    public function getInfoProduk(){
        $st = "komik : " . $this -> getInfo(). " {$this -> jumlahHalaman} Halaman";
        return $st;
    }
    
}