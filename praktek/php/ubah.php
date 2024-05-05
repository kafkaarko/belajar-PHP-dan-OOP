<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
require 'func.php';
$conn = mysqli_connect("localhost" , "root" , "" , "namaKartu");



$id = $_GET["id"];
$ktr = query("SELECT * FROM kartu WHERE id = $id")[0];

if(isset($_POST['submit'])){
    if(ubah($_POST) > 0){
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
    document.location.href = 'index.php';
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
    <h1>ubah kartu peserta</h1>

    <form action="" method="post"  enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php $ktr["id"]?>">
        <input type="hidden" name="gambarLama" value="<?php echo $ktr["gambar"]?>">
        <ul>
            <li>
                <label for="gambar">GAMBAR:</label>
                <img src="poto/<?= $ktr['gambar']?>" alt="" width="150px">
                <input type="file" name="gambar"
                id="gambar">
            </li>
            <li>
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $ktr['nama']?>">
            </li>
            <li>
                <label for="nis">NIS:</label>
                <input type="text" name="nis" id="nis" value="<?php echo $ktr['nis']?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN:</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $ktr['jurusan']?>"> 
            </li>
            <li>
                <label for="rayon">RAYON:</label>
                <input type="text" name="rayon" id="rayon" value="<?php echo $ktr['rayon']?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah</button>
            </li>
        </ul>
    </form>
</body>
</html>