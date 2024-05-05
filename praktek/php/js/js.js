$(document).ready(function(){
    //hilangkan tombol cari
    $('#tombol').hide()
    //event ketika keyword di tulis
    $('#ky').on('keyup', function(){
        //munculkan loading
        // $('.loader').show()

        //ajx load
        // $('#countainer').load('ajax/siswa.php?keyword=' + $('#keyword').val())

        //$.get()
        $.get('jsx/kartu.php?keyword=' + $('#ky').val(), function(data){

            $('#wr').html(data);
            // $('.loader').hide()
        })
    });
});