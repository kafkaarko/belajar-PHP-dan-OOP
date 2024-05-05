<?php

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