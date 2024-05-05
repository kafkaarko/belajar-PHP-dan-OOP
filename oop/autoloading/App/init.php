<?php

// require_once 'App/produk/infoProduk.php';
// require_once 'App/produk/produk.php';
// require_once 'App/produk/komik.php';
// require_once 'App/produk/game.php';
// require_once 'App/produk/cetakInfo.php';

spl_autoload_register(function($class){
    require_once 'produk/' . $class . '.php';
});
