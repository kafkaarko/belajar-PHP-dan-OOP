<?php
require 'latihan2.php';
$id = $_GET["id"];

if( hapus($id) > 0){
    echo"
    <script>
        alert('data berhasil di hapus');
        document.location.href = 'latihan.php';
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal di add');
        document.location.href = 'latihan.php';
    </script>
    ";
}

?>