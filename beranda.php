<?php 
    session_start();
    include 'koneksi.php';
    if($_SESSION['start_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>PPDB Online | Administrator</title>
</head>

<body>
    <!-- bagian header -->
    <header>
        <h1><a href="beranda.php">Admin PPDB</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data peserta</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>
    <!-- bagian content -->
    <section class="content">
        <h2>SMKN ABC</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?>,Selamat Datang di PPDB Online SMKN ABC</h3>
        </div>
    </section>
</body>

</html>