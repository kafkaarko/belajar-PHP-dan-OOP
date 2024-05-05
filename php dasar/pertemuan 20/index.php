<?php
session_start();
    //jika gk ada user yang masuk maka user di tendang ke halaman login
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit();
    }
   require 'function.php';
   $siswa = query("SELECT * FROM siswa");

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
    <style>
        .loader{
            width: 150px;
            position: absolute;
            top: 90px;
            z-index: -1;
            left: 170px;
            display: none;
        }
    </style>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>daftar siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="25" autofocus placeholder="masukan kata kunci" autocomplete="off" id="keyword">
    <button type="sumbit" name="cari" id="tombol-cari" >cari</button>
    
    <img src="img/loader_gif.gif" alt="" class="loader">

    </form>
    <br>
    <div id="container">

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
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/script.js"></script>
    </div>
</body>
</html>