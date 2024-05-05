<?php
require "latihan2.php";
$conn = mysqli_connect("localhost" , "root" , "", "nama_siswa_pplg-x1");

//

if(isset($_POST["submit"])){
    //ambil data dari data form

    //query insert data
   

    //cek data apakah data berhasil di kirim atau tidak
    if(tambah($_POST) > 0){
        echo"
        <script>
            alert('data berhasil di add');
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1> tambah data siswa</h1>

    <form action="" method="post">
    <ul>
        <li>
            <label for="nis">NIS :</label>
            <input type="text" name="nis" id="nis" require>
        </li>
        <li>
        <label for="nama">NAMA :</label>
            <input type="text" name="nama" id="nama" require>
        </li>
        <li>
        <label for="rayon">RAYON :</label>
            <input type="text" name="rayon" id="rayon">
        </li>
        <li>
        <label for="jurusan">JURUSAN :</label>
            <input type="text" name="jurusan" id="jurusan" require>
        </li>
        <li>
            <button type="submit" name="submit">Tambah</button>
        </li>
    </ul>

    </form>
</body>
</html>
