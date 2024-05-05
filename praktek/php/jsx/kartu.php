<?php
require '../func.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM kartu 
    WHERE
    nama LIKE '%$keyword%' OR
    nis LIKE  '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    rayon LIKE '%$keyword%'
    ";

    $kartu = query($query);


?>
 <div class="wrap" id="wr">
            <?php $i = 1;?>
            <?php foreach($kartu as $kt) :?>
                <div class="card" id="cd">
                    <div class="wraper">
                    <div class="gabung">
                        <div class="flex">
                            <div class="imgleft">
                                <img src="poto/<?= $kt['gambar'];?>" alt="" width="200px" height="200px">
                            </div>
                            
                            <div class="wordright">
                                </div>
                                <p>NAMA:<?php echo $kt['nama'];?></p>
                                
                                <div class="down">
                                    <div class="close">
                                        <div class="number">
                                            <p>NIS:<?php echo $kt['nis'];?> </p>
                                        </div>
                                        <div class="jurasan">
                                            <p>JURUSAN:<?php echo $kt['jurusan'];?></p>
                                        </div>
                                    </div>
                                    <div class="rayon">
                                        <p>RAYON:<?php echo $kt['rayon'];?></p>
                                    </div>
                                    <div class="uha">
                                        <a href="ubah.php?id=<?php echo $kt["id"];?>">Ubah</a>
                                        <a href="hapus.php?id=<?php echo $kt["id"];?>" onclick="return confirm('yakin')">hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                            </div>
                         </div>
    <?php $i++;?>
    <?php endforeach;?>
</div>