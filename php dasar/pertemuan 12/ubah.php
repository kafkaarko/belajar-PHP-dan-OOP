<?php
require "latihan2.php";
$conn = mysqli_connect("localhost" , "root" , "", "nama_siswa_pplg-x1");

//ambil data
$id = $_GET["id"];
//querry data siswa
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];


if(isset($_POST["submit"])){
   

    //cek data apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0){
        echo"
        <script>
            alert('data berhasil di ubah');
            document.location.href = 'latihan.php';
        </script>
        ";
    }else{
        echo"
        
        <script>
        alert('data gagal di ubah');
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
    <h1>edit siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php $sw["id"]?>">
    <ul>
        <li>
            <label for="nis">NIS :</label>
            <input type="text" name="nis" id="nis" require value="<?php echo $sw["nis"]?>">
        </li>
        <li>
        <label for="nama">NAMA :</label>
            <input type="text" name="nama" id="nama" require value="<?php echo $sw["nama"]?>">
        </li>
        <li>
        <label for="rayon">RAYON :</label>
            <input type="text" name="rayon" id="rayon" value="<?php echo $sw["rayon"]?>">
        </li>
        <li>
        <label for="jurusan">JURUSAN :</label>
            <input type="text" name="jurusan" id="jurusan" require value="<?php echo $sw["jurusan"]?>">
        </li>
        <li>
            <button type="submit" name="submit">ubah</button>
        </li>
    </ul>

    </form>
</body>
</html>
