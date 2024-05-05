<?php

require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM siswa 
    WHERE
        nama LIKE '%$keyword%' OR
        nis LIKE '%$keyword%' OR
        rayon LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' 

";
$siswa = query($query);
?>
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
