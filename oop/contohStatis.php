<?php

class statis{
    public static $nama = "kafkaGanteng";
    public static $angka = 10;

    public static function kafka(){
        return "kafka wuz hir" . self::$angka-- . "berapa kali wir <br>";
    }
}

echo statis::$nama;
echo"<br>";
echo statis::kafka();
$baru = new statis;
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
echo $baru -> kafka();
//untuk apa statis keyword
//statis keyword
//member yang terikat dengan class,bukan dengan object
//nilai static akan selalu teteap meskipun obejct fi instansiasi berulang kali
//membuat kode menjadi procedura;
//biasanya diganakan untuk membuat fungsi bantuan/helper
//diguanakam di clas class utiliity pada frameworlk