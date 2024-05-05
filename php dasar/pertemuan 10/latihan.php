<?php

   require 'latihan2.php';
   $siswa = query("SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>nis</th>
        <th>rayon</th>
        <th>jurusan</th>
    </tr>
    <?php $i = 1 ;?>
    <?php  foreach($siswa as $s) :?>
    <tr>
        <td><?php echo $i?></td>
        <td>
            <a href="">ubah|</a>
            <br>
            <a href="hapus.php?id=<?php echo $s["id"];?>" onclick="return confirm('yakin')">hapus</a>
        </td>
        <td><?php echo $s["nis"];?></td>
        <td><?php echo $s["rayon"];?></td>
        <td><?php echo $s["jurusan"];?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
    </table>
</body>
</html>