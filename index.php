<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {

    // ambil 1 id terbesar di kolom id pendaftaran lalu ambil 5 karakter aja di sebelah kanan
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran,5)) AS id FROM tb_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'p' . date('Y') . sprintf("%05s", $d->id + 1);

    // proses insert
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
        '" . $generateId . "',
        '" . date('Y-m-d') . "',
        '" . $_POST['tahun_ajaran'] . "',
        '" . $_POST['jurusan'] . "',
        '" . $_POST['nama'] . "',
        '" . $_POST['tempat_lahir'] . "',
        '" . $_POST['tanggal_lahir'] . "',
        '" . $_POST['jk'] . "',
        '" . $_POST['agama'] . "',
        '" . $_POST['alamat'] . "'
    )");
    
    if ($insert) {
        echo '<script>window.location="berhasil.php?id=' . $generateId . '"</script>';
    } else {
        echo 'huft' . mysqli_error($conn);
    }
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
    <title>PPDB SMKN ABC</title>
</head>

<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2>Formulir Pendaftaran Peserta Didik Baru SMKN ABC</h2>

        <!-- bagian form -->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tahun_ajaran" class="input-control" value="2023/2024" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">--Pilih--</option>
                                <option value="Teknik Otomotif">Teknik Otomotif</option>
                                <option value="Teknik Listrik">Teknik Listrik</option>
                                <option value="Teknik Las">Teknik Las</option>
                                <option value="Teknik Kendaraan ringan">Teknik Kendaraan Ringan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <h3>Data Diri Calon Siswa</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Kristen">Kristen</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar sekarang">
                    </tr>
                </table>
            </div>
        </form>
    </section>
</body>

</html>