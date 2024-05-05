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

    //uplod gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }


    $query = "INSERT INTO siswa VALUES ('','$nama','$nis','$rayon','$jurusan','$gambar')";
    mysqli_query($k, $query);


    return mysqli_affected_rows($k);
}


function upload(){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo"<script>
            alert('masukan gambar terlebih dahulu')
        </script>";
        return false;
    }

    //cek apakah dia gambar atau bukan

     $ekstensiGambar = ['jpg' , 'jpeg' , 'png' , 'gif' , 'svg'];
     $valid = explode('.', $namaFile);
     $valid = strtolower(end($valid)); 
     // explode buat misahin,end buat ambil di belakang,strtolower buat huruf kecil
     // dibawah untuk cek apakah itu gambar apa bukan
     if( !in_array($valid , $ekstensiGambar)){
        echo"<script>
        alert('itu mah bukan gambar meren')
    </script>";
    return false;
     }
     //cek ukuran gamber
     if( $ukuran > 1000000){
        echo"<script>
        alert('gede banget bjiww')
    </script>";
    return false;
     }

     //generete nama gambar baru

     $namaFileBaru = uniqid();
     $namaFileBaru .= '.';
     $namaFileBaru .= $ekstensiGambar;
     //pengecekan gambar siap di uplod
     move_uploaded_file($tmp , 'img/' . $namaFileBaru);

     return $namaFileBaru;

     
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
    $gambarLama= htmlspecialchars($data["gambarLama"]);

    //cek apakah user menggati gambar
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }
    

    $query ="UPDATE siswa SET
        nis = '$nis',
        nama = '$nama',
        rayon = '$rayon',
        jurusan = '$jurusan',
        gambar = '$gambar'
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
