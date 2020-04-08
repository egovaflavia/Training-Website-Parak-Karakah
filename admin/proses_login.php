<?php include("koneksi.php"); ?>
<?php
$user = $_POST['username'];
$pass = $_POST['password'];
// $login = $_POST['login'];

if ('login') {
    if ($user == "" || $pass == "") {
        echo "<script>alert('Username atau Password Salah');</script>";
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username='$user' AND password='$pass' ");
        $data = mysqli_fetch_array($query);
        $cek = mysqli_num_rows($query);

        if ($cek >= 1) {
            session_start();
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['nama_admin'] = $data['nama_admin'];
            $_SESSION['username'] = $data['username'];
            // $_SESSION['level'] = $data['level'];
            echo "<script>alert('Selamat datang !!');
            window.location='backup_index.php';
            </script>";
        } else {
            echo "<script>alert('Username atau Password Salah !!');
            window.location='index.php';
            </script>";
        }
    }
}
