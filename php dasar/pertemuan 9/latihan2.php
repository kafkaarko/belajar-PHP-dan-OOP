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

?>
