<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_POST["nama"])) :?>
    <h1>selamat datang <?php echo $_POST["nama"]?></h1>
    <?php endif ; ?>
    <form action="halaman6.php" method="post">
        masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
    
</body>
</html>