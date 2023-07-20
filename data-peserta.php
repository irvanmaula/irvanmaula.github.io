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
        <h2>Data Peserta</h2>
        <div class="box">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
           <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $list_peserta = mysqli_query($conn,"SELECT * FROM tb_pendaftaran");
                while($row = mysqli_fetch_array($list_peserta)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['id_pendaftaran'] ?></td>
                    <td><?php echo $row ['nm_peserta'] ?></td>
                    <td><?php echo $row ['jk'] ?></td>
                    <td>
                        <a href="detail-peserta.php?id=<?php echo $row ['id_pendaftaran'] ?>" >Detail</a> ||
                        <a href="detail-peserta.php?id=<?php echo $row ['id_pendaftaran'] ?>" >Edit</a> ||
                        <a href="hapus-peserta.php?id=<?php echo $row ['id_pendaftaran'] ?>" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
           </table>
        </div>
    </section>
</body>

</html>