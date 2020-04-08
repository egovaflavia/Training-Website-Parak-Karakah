<?php
include("../koneksi.php");
if (isset($_POST['kirim'])) {
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_komentar`( `nama_komentar`, `email`, `nohp`, `komentar`) VALUES ('$_POST[nama_komentar]','$_POST[email]', '$_POST[nohp]','$_POST[komentar]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
        $query = "INSERT INTO `tbl_komentar`(`nama_komentar`, `email`, `nohp`, `foto_komentar`, `komentar`) VALUES ('$_POST[nama_komentar]','$_POST[email]','$_POST[nohp]', '$nama_foto', '$_POST[komentar]')";
        $proses = mysqli_query($koneksi, $query);
    }

    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='../index.php?page=home';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='../index.php?page=home';
    </script>";
    }
}
