//ambil element yang di butuhkan

let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombol-cari");
let container = document.getElementById("container");

//tambhakan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
    
    //buat objek ajaxx
    let xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value , true);
    xhr.send();

});