<?php
class game extends produk implements infoProduk{
    public $waktuMain;

    public function __construct($judul , $penulis , $penerbit , $harga, $jam = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this -> waktuMain = $jam;
    }

    public function setDiskon($diskon){
        $this -> diskon = $diskon;
    }

    public function getInfo(){
        // buku : sisiterang | unknown,BIEL1998,200000 - 500 hlm
        $st = " {$this -> judul} | {$this -> getLabel()}";
      

        return $st;
    }

    public function getInfoProduk(){
        $st = "game :" . $this -> getInfo(). " {$this -> waktuMain} jam";
        return $st;
    }


}