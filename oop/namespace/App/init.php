<?php

// require_once 'App/produk/infoProduk.php';
// require_once 'App/produk/produk.php';
// require_once 'App/produk/komik.php';
// require_once 'App/produk/game.php';
// require_once 'App/produk/cetakInfo.php';
// require_once 'App/produk/User.php';
// require_once 'App/servis/User.php';

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'produk/' . $class . '.php';
});
spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'servis/' . $class . '.php';
});
