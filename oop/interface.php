<?php

//interface(1)
//kelas abstrak yang sama sekali tidak memiliki implementasi
//murni merupakan templete untuk kelas turunannya
//tidak boleh memeliki property,hanya deklarasi method saja
//semua methodnya harus dengan visibilty public
//boleh mendeklarsikan __construct()
//satu kelas boleh mengimplementasikan banyak interaface
//interface(2)
//dengan menggunakan type-hinting dapat melakukan 'depencdeny Injection'
//pada akhirnya akan mencapai polmorphism

//menciptakan hierarki antar kelas (parent & child)
// child class mewarisi semua properti dan method dari parent yang visble
// child class memperluas extends funsinalitas dari parentnya

//jualan produk
// game

//visibility

//konstp yang digunakan untuk mengatur akses dari propety dan method pada sebuah objek
//ada 3 keywoed visibility yaitu public,protected dan private
//public = properti yang digunakan dimana asaya bahkan di luar kelas
//protected = hanya dapat dgunakan di dalama sebuah kelas beserta tururnanya
//private = hanya di gunakan di dalam sebauh kelasa tertentu saja
//kenaapa visibility
//hanya memperlihatkan aspek dari class yang di butuhkan oleh cliet,menentukan kebutuhan yang jelas untuk objek,memberikan kendali pada kode untuk menghidari bug

interface infoProduk{
    public function getInfoProduk();
}

abstract class produk{
    protected $judul,
           $penulis ,
           $penerbit;

    protected $diskon = 0;

    public $harga;



    
    public function __construct($judul , $penulis , $penerbit , $harga)
    {
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        
    }

    //setter and gatter line 42 - 64
    public function setJudul($judul){
        return $this -> judul = $judul;
    }

    public function setPenulis($pen){
        return $this -> penulis = $pen;
    }

    public function setPenerbit($terbit){
        return $this -> penerbit = $terbit;
    }

    public function getJudul(){
        return $this -> judul;
    }

    public function getPenulis(){
        return $this -> penulis;
    }

    public function getPenerbit(){
        return $this -> penerbit;
    }

   

    public function getHarga(){
        return $this -> harga - ($this -> harga * $this-> diskon / 100);
    }

    public function getLabel()
    {
        return  $this -> penulis .$this ->penerbit. $this -> harga;
    }

    abstract public function getInfo();
    
  

}

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

class cetakInfo{
    public $daftarProduk = array();

    public function tambahProduk(produk $produk){
        $this->daftarProduk[] = $produk;
    }


    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
         $str .= "- {$p->getInfoProduk()} <br>"  ; 
        }
        return $str;
    }
}


$produk5 = new game("Devil My cry " , " idk " , " riot " , 2020 ,90);
$produk6 = new komik("sisi terang "," unknown "," BIEL1998 ",2000000,420);

$cetakProduk =new cetakINfo();
$cetakProduk->tambahProduk($produk5);
$cetakProduk->tambahProduk($produk6);
echo $cetakProduk->cetak();


