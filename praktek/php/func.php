<?php
$conn = mysqli_connect("localhost" , "root" , "", "namaKartu");

function query($query){
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data){
    global $conn;
   
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $rayon = htmlspecialchars($data["rayon"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }


    $query = "INSERT INTO kartu VALUES ('','$gambar','$nama','$nis','$jurusan','$rayon')";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function upload(){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo"
        <script>
        aleret('masukan gambar terlebih dahulu');
        </script>
        ";
        return false;
    }

    $ekstensiGambar = ['jpg' , 'jpeg' , 'png'];
    $valid = explode('.', $namaFile);
    $valid = strtolower(end($valid));
    if(!in_array($valid , $ekstensiGambar)){
        echo"
            <script>
                alert('gambar tidak valid');
            </script>
        ";
        return false;
    }
    if($ukuran > 10000000){
        echo"
            <script>
            alert('size gambar terlalu besar');
            </script>
        ";
        return false;
    }
    // $ukuranGambar = getimagesize($tmp);
    // $lebar = $ukuranGambar[0]; // Ambil lebar gambar
    // $ketinggian = $ukuranGambar[1]; // Ambil ketinggian gambar
    

    // $maxLebar = 366;
    // $maxKetinggian = 461;
    
    // if ($lebar > $maxLebar || $ketinggian > $maxKetinggian) {
    //     echo "
    //         <script>
    //         alert('Dimensi gambar terlalu besar');
    //         </script>
    //     ";
    //     return false;
    // }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmp, 'poto/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM kartu WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $_GET["id"];
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $rayon= htmlspecialchars($data["rayon"]);


    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }
    

    $query ="UPDATE kartu SET
        gambar = '$gambar',
        nama = '$nama',
        nis = '$nis',
        jurusan = '$jurusan',
        rayon = '$rayon'
        WHERE id = $id";

    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM kartu WHERE
    nama LIKE '%$keyword%' OR
    nis LIKE  '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    rayon LIKE '%$keyword%'
    ";
    return query(($query));
}

function regiss($data){
    global $conn;
        $username = strtolower(stripslashes($data['username']));
        $pw = mysqli_real_escape_string($conn , $data["password"]);
        $pw2 = mysqli_real_escape_string($conn , $data["pasword2"]);

        $result = mysqli_query($conn , "SELECT nama FROM akun WHERE nama = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo"
            <script>
                alert('username telah ada');
                document.location.href = 'login.php';
            </script>
            ";
            return false;
        }

        if($pw !== $pw2){
            echo"
            <script>
                alert('password tidak di temukan');
            </script>
            ";
            return false;
        }

        $pw  = password_hash($pw,PASSWORD_DEFAULT);

        mysqli_query($conn , "INSERT INTO akun VALUES ('','$username','$pw')");

        return mysqli_affected_rows($conn);
}

?>