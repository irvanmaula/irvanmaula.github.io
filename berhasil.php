<?php 

    include 'koneksi.php';
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
    <title>PPDB SDN ABC</title>
</head>

<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2>Pendaftaran Berhasil</h2>

        <div class="box">
            <h4>Kode pendaftaran anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id']?>" target_blank class="btn-cetak">Cetak Bukti Daftar</a>
        </div>

    </section>
</body>

</html>