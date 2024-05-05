<?php

//class adalah templete
//class blueprint atau templete,mendefinisikan object,menyimpan data yang di sebut proprty dan menthod
//cara bikin class
class Coba {
    //biasannya programmer menggunakan camel case saat menamakan class
    public $a; //prpperty

    //method
    public function b(){

    }


}
//obejct adalah implementasi
//intance yang di difinisikan oleh class,banyak objek yang dapat di buat menggunakan satu class,object dibuat dengan menggunakan keyword NEW

//membuat obejct instance dari class
$a = new Coba();
$b = new Coba();
$c = new Coba();

var_dump($a);