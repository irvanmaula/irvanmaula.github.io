<?php
    // membuat koneksi ke database
    $host            = 'localhost';
    $user            = 'root';
    $password        = '';
    $nama_database   = 'db_ppdb';

    $conn = mysqli_connect($host,$user,$password,$nama_database);

    if(!$conn){
        die("Gagal terhubung dengan database:" .mysqli_connect_error());
    }
?>