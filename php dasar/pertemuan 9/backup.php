<?php

//koneksi ke database
$conn = mysqli_connect("localhost" , "root" , "", "nama_siswa_pplg-x1");

//ambil data dari table siswa /query data
$result = mysqli_query($conn, "SELECT * FROM siswa");

//ambil data siswa dari objek result (fetch)
//mysqli_fatech_row() // array numeric
//mysqli_fatech_assoc() // array asosiatif
//mysqli_fatech_array() //keduannya
//mysqli_fatech_object()

// $siswa = mysqli_fetch_row($result);
// var_dump($siswa);
// while($siswa = mysqli_fetch_assoc($result)){
//     var_dump($siswa["nama"]);
// }
// $siswa = mysqli_fetch_array($result);
// var_dump($siswa);
// $siswa = mysqli_fetch_object($result);
// var_dump($siswa);
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

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>nis</th>
        <th>rayon</th>
        <th>jurusan</th>
    </tr>
    <?php $i = 1 ;?>
    <?php  while($row = mysqli_fetch_assoc($result)) :?>
    <tr>
        <td><?php echo $i?></td>
        <td>
            <?php echo $row["nama"]?>
        </td>
        <td><?php echo $row["nis"]?></td>
        <td><?php echo $row["rayon"]?></td>
        <td><?php echo $row["jurusan"]?></td>
    </tr>
    <?php $i++;?>
    <?php endwhile;?>
    </table>
</body>
</html>