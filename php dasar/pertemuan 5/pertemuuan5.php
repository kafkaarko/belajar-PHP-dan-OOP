<?php
//pengulangan pada array
//for /each
$angka = [2,3,5,7,8,9,11,4,5,6,7,7,5,]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float:left;
        }
        .clear { clear: both}
    </style>
</head>
<body>
    <?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i];?></div>
        <?php } ?>


        <div class="clear"></div>

        <?php foreach(  $angka as $k ) {?>
            <div class = "kotak"><?php echo $k;?></div>
            <?php }?>

            <div class="clear"></div>

            <?php foreach ($angka as $p)  :?>
                <div class="kotak"><?= $p; ?></div>
                <?php endforeach;?>
</body>

</html>