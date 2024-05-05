<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
require 'func.php';
$kartu = query("SELECT * FROM `kartu`");

if(isset($_POST['cari'])){
    $kartu = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaff</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #3C5B6F;
  display: flex;
  justify-content:space-between;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #948979;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.wrap{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}
.card{
    background-color: azure;
    width: 250px;
    height: 400px;
    margin: 20px 0 0 20px;
    justify-content: center;
    align-items: center;
   
}
.wordright{
    word-wrap: break-word;
}
.wraper{
    display: flex;
    justify-content: center;
}
.a{
    background-color: green;
}
a{
    background-color: #EEEEEE;
    display: block;
    text-decoration: none;
    color: green;
    display: flex;
    justify-content: center;
    border-radius: 15px;
    transition: 1.5s;
}
a:hover{
    background-color: green;
    color:#EEEEEE;
    transition: 1.5s;
}
.gabung{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}
p{
    font-size: 17px;
    color:#322C2B;
}
.namaloggo a{
    display: flex;
}
.up{
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
input[type=text]{
    height: 40px;
    width: 250px;
    font-size: medium;
    transition: 1.5s ease-in-out;
    border-radius: 20px;
    border: none;
}
input[type=text]:hover{
    background-color: #BACD92;
    opacity: 1.5;
    transition: 1.5s ease-in-out;
    border:line;

}
.bawah{
    background-color: #3C5B6F;
}
.divan{
    display: flex;
    justify-content: center;
}
.nama{
    
    justify-content: space-evenly;
} 
.p{
    font-weight: bold;
}

</style>
</head>
<body>
    <header>
        <nav>
            <div class="bg">
                <div class="navbar">
                        <div class="namaLogo">
                            <a href="tambah.php" class="a">+ tambah peserta</a>
                        </div>
                            <div class="dropdown">
                               <img src="poto/mukaoranf.jpeg" alt="" width="100px" height="100px">
                            </div> 
                    </div>
                </div>
         </nav>
    </header>
    <main>
        <div class="up">
            <div class="serch">
                 <form action="" method="post">
                        <input type="text" name="keyword" class="kywd" size="24" autofocus placeholder="masukan kata kunci" autocomplete="off" id="ky">
                         <button type="submit" name="cari" id="tombol">cari</button>
                     </form>
            </div>
        </div>
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
                                        <a href="ubah.php?id=<?php echo $kt["id"];?>" class="ab">Ubah</a>
                                        
                                        <a href="hapus.php?id=<?php echo $kt["id"];?>" onclick="return confirm('yakin')" class="ab"> hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                            </div>
                         </div>
    <?php $i++;?>
    <?php endforeach;?>
</div>
</main>
<footer>
    <div class="bawah">
        <div class="divan">

            <div class="nama">
                <h1>
                    kaff
                </h1>
                <div class="kata">
                    <p class="p">
                        ini adalah web php native pertamaku dengan bantuan yt<a href="https://www.youtube.com/@sandhikagalihWPU" target="_blank">UNPAS</a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>