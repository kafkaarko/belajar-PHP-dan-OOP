
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
           $wktbrm,
           $tipe;


    
    public function __construct($judul , $penulis , $penerbit , $harga,$jumlah = 0 , $jam = 0,$tipe)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> jmlHlm = $jumlah;
        $this -> wktbrm = $jam;
        $this -> tipe = $tipe;
    }

    public function getLabel()
    {
        return  $this -> penulis .$this ->penerbit. $this -> harga;
    }

    public function getInfoLengap(){
        // buku : sisiterang | unknown,BIEL1998,200000 - 500 hlm
        $st = "{$this -> tipe} : {$this -> judul} | {$this -> getLabel()}";
        if( $this -> tipe == "buku"){
            $st .= " - {$this -> jmlHlm} Halaman. ";
        }else if($this -> tipe == "game"){
            $st .= " - {$this -> wktbrm} jam. ";
        }
        return $st;
    }

}

class cetakInfo{
    public function cetak(produk $produk){
        $str = "{$produk -> judul}| {$produk -> getLabel()}";
        return $str;
    }
}


$produk5 = new produk("valo " , " idk " , " riot " , 2020 ,0,20 ,"game");
$produk6 = new produk("sisi terang "," unknown "," BIEL1998 ",2000000,120,0,"buku");

echo $produk5 -> getInfoLengap();
echo "<br>";
echo $produk6 -> getInfoLengap();

//yang di inginkan yang di gabungkan semua info yang telah di tulis oleh user
// game : valorant | idk,riot,2020 - 50Jam
// buku : sisiterang | unknown,BIEL1998,200000 - 50Jam