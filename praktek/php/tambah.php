<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
require 'func.php';
$conn = mysqli_connect("localhost" , "root" , "" , "namaKartu");

if(isset($_POST['submit'])){
    if(tambah($_POST) > 0){
        echo"
        <script>
        alert('data berhasil di tambahakan');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
    echo"
    <script>
    alert('data berhasil di tambahakan');
    </script>
    ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>
<body>
    <h1>tambah kartu peserta</h1>

    <form action="" method="post"  enctype="multipart/form-data" >
        <ul>
            <li>
                <label for="gambar">GAMBAR:</label>
                <input type="file" name="gambar"
                id="gambar">
            </li>
            <li>
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nis">NIS:</label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="jurusan">JURUSAN:</label>
                <input type="text" name="jurusan" id="jurusan"> 
            </li>
            <li>
                <label for="rayon">RAYON:</label>
                <input type="text" name="rayon" id="rayon">
            </li>
            <li>
                <button type="submit" name="submit">tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>