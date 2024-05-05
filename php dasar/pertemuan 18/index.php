<?php
session_start();
    //jika gk ada user yang masuk maka user di tendang ke halaman login
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit();
    }
   require 'function.php';


//pagination
//konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM siswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
//halaman 2 = 2
//halaman 3 = 4 

$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
   $siswa = query("SELECT * FROM siswa LIMIT $awalData,$jumlahDataPerhalaman ");
 
   //tombol cari ditekan
   if(isset($_POST["cari"])){
    $siswa = cari($_POST["keyword"]);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>daftar siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="25" autofocus placeholder="masukan kata kunci" autocomplete="off">
    <button type="sumbit" name="cari">cari</button>

    </form>
<br>
<!-- navigasi -->

<?php if( $halamanAktif > 1):?>
    <a href="?halaman=<?= $halamanAktif - 1 ;?>">&laquo;</a>
<?php endif;?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++):?>
    <?php if( $i == $halamanAktif):?>
    <a href="?halaman=<?= $i?>" style="font-weight : bold ; color : red"><?= $i?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i?>"><?= $i?></a>
    <?php endif;?>
<?php endfor;?>
<?php if( $halamanAktif < $jumlahHalaman):?>
    <a href="?halaman=<?= $halamanAktif + 1 ;?>">&raquo;</a>
<?php endif;?>


    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>no</th>
        <th>aksi</th>
        <th>nama</th>
        <th>nis</th>
        <th>rayon</th>
        <th>jurusan</th>
        <th>gambar</th>
    </tr>
    <?php $i = 1 ;?>
    <?php  foreach($siswa as $s) :?>
    <tr>
        <td><?php echo $i?></td>
        <td>
            <a href="ubah.php?id=<?php echo $s["id"];?>">ubah|</a>
            <br>
            <a href="hapus.php?id=<?php echo $s["id"];?>" onclick="return confirm('yakin')">hapus</a>
        </td>
        <td><?php echo $s["nama"];?></td>
        <td><?php echo $s["nis"];?></td>
        <td><?php echo $s["rayon"];?></td>
        <td><?php echo $s["jurusan"];?></td>
        <td><img src="img/<?= $s['gambar'];?>" alt="" width="250px"></td>        
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
    </table>
</body>
</html>