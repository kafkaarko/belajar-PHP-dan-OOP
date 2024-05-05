<?php
//pengulangan
//for while do ... while
// foreach

// for($i = 0; $i < 5; $i++){
//     echo"halo nabila <br>";
// }

// $i = 0;
// while($i < 7 ){
//     echo"halo nabila <br>";
//     $i++;
// }

// $i = 2;
// do{
//     echo"hehea<br>";
//     $i++;
// }while( $i < 5)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<style>
    .warna{
        background-color: silver;
    }
</style>
<body>
    <table border="1" cellpadding="10" cellspacing="o">
    <?php
    // for($o = 1; $o <= 3; $o++ ){
    //     echo"<tr>";
    //     for($k = 1; $k <= 5; $k++){
    //         echo"<td>$o,$k</td>";
    //     }
    //     echo"</tr>";
    // }

    for($i = 1; $i <= 5; $i++)://kebawah?>
    <?php  if($i % 2 == 0 ) : ?>
        <tr class="warna">
    <?php else : ?>
    <tr>
    <?php endif; ?>
        <?php
        for($j = 1; $j <= 5; $j++) ://samping
        ?>
        <td><?php echo" $i,$j"; ?></td>
        <?php
        endfor;
        ?>
    </tr>
    <?php
    endfor;
    ?>
    </table>
</body>
</html>