<?php

$k = mysqli_connect("localhost" , "root" , "", "nama_siswa_pplg-x1");


function query($query){
    global $k;
    $result = mysqli_query($k , $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


function tambah($data){
    global $k;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $rayon = htmlspecialchars($data["rayon"]);
    $jurusan = htmlspecialchars($data["jurusan"]);


    $query = "INSERT INTO siswa VALUES ('','$nama','$nis','$rayon','$jurusan')";
    mysqli_query($k, $query);


    return mysqli_affected_rows($k);
}

function hapus($id){
    global $k;
    mysqli_query($k,"DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($k);
}

function ubah($data){
    global $k;
    $id = $_GET["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $rayon = htmlspecialchars($data["rayon"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query ="UPDATE siswa SET
        nis = '$nis',
        nama = '$nama',
        rayon = '$rayon',
        jurusan = '$jurusan'
        WHERE id = $id";

    mysqli_query($k , $query);

    return mysqli_affected_rows($k);
}

function cari($keyword){
    $query = "SELECT * FROM siswa WHERE
    nama LIKE '%$keyword%' OR
    nis LIKE '%$keyword%' OR
    rayon LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' 
    
    ";
    return query(($query));
}
?>
