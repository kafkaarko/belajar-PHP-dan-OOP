<?php

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

class produk{
    private $judul,
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

    public function setDiskon($diskon){
        $this -> diskon = $diskon;
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
echo"<hr>";
$produk5 -> setDiskon(20);
echo $produk5 ->getHarga();
echo"<hr>";
$produk10 = new produk("kafka","ajgig","fjeigi","gioghi");
$produk10 -> setJudul("nabila yudha");
echo $produk10 ->getPenerbit();
echo $produk10 -> getJudul();
