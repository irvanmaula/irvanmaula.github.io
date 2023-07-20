<?php 
session_start();

    include 'koneksi.php';

    if(isset($_POST['register'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $cek_user = mysqli_query($conn,"SELECT * FROM tb_peserta WHERE '$user'");
        $cek_login = mysqli_num_rows($cek_user);
        

        if($cek_login > 0) {
            echo "<script>
            alert('Username telah terdaftar');
            window.location = 'register-peserta.php';
            </script>";
        }else{
            if ($pass != $cpass){
                echo "<script>
                alert('konfirmasi password tidak sesuai');
                window.location = 'register-peserta.php';
                </script>";
            }else{
                $password = password_hash($password,PASSWORD_DEFAULT);
                mysqli_query($conn,"INSERT INTO tb_peserta VALUES('','$user','$pass')");
                echo "<script>
                alert('Registrasi berhasil, dan silahkan login');
                window.location = 'login-peserta.php';
                </script>";
            }
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
    <title>PPDB SDN ABC</title>
</head>

<body>
    <!-- bagian main login -->
    <section class="main-login">
        <div class="box-login">
            <h2>Registrasi Peserta</h2>
            <!-- bagian form login -->
            <form action="" method="post">
                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="email" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Konfirmasi Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="cpass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="register" value="Daftar" class="btn-login">
                            </td>
                        </tr>
                    </table>
                </div>
                <p class="login-register-text">sudah punya akun? <a href="login-peserta.php">Login </a></p>
            </form>
        </div>
    </section>
</body>

</html>