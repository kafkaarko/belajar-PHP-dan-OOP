$(document).ready(function(){
    //hilangkan tombol cari
    $('#tombol-cari').hide()
    //event ketika keyword di tulis
    $('#keyword').on('keyup', function(){
        //munculkan loading
        $('.loader').show()

        //ajx load
        // $('#countainer').load('ajax/siswa.php?keyword=' + $('#keyword').val())

        //$.get()
        $.get('ajax/siswa.php?keyword=' + $('#keyword').val(), function(data){

            $('#container').html(data);
            $('.loader').hide()
        })
    });
});